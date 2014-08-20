/**
 * Created by mohammad on 7/1/14.
 */

var io = require('socket.io')(8080);
var http = require('http');
var url = require('url');

var sockets = [];

io.on('connection', function(socket) {
    sockets.push(socket);

    socket.emit('welcome', { hello: 'world'});

    socket.on('identify', function (msg) {
        console.log("Identify message received from " + this + " saying " + msg);
        socket.company_id = msg.company_id;
    });

    socket.on('cancel', function(msg) {
        var tid = msg.task_id;
        for (var i = 0; i < requests[tid]['options'].length; i++) {
            if (requests[tid]['options'][i].company_id == parseInt(socket.company_id)) {
                requests[tid]['options'].splice(i, 1);
                break;
            }
        }
        console.log(socket.company_id + ' canceled');
        socket.emit('task-canceled', { task_id: msg.task_id });

        if (requests[tid]['options'].length < 1) {
            requests[tid]['response'].end('{ "status": 0 }');
            delete requests[tid];
        }
        console.log('sent response');
    });

    socket.on('accept', function(msg) {

        var task = requests[msg.task_id];
        for (var i = 0; i < task['options'].length; i++) {
            if (task['options'][i].company_id == parseInt(socket.company_id)) {
                task['response'].end('{ "status": 1, "helper_id": ' + task['options'][i].helper_id + ' }');
                break;
            }
        }

        socket.emit('task-accepted', { task_id: msg.task_id });
        for (i = 0; i < sockets.length; i++) {
            sockets[i].emit('task-canceled', { task_id: msg.task_id });
        }
        console.log('Task assigned to socket ' + socket.company_id);
        delete requests[msg.task_id];
    });

    socket.on('disconnect', function() {
        sockets.splice(sockets.indexOf(socket), 1);
    });
});

var requests = {};

var server = http.createServer(function(req, res) {
    var _get = url.parse(req.url, true).query;
    console.log(_get);

    var options = JSON.parse(_get['options']);
    _get['options'] = options;

    var task_id = _get['task_id'];
    requests[task_id] = {};
    requests[task_id]['options'] = options;
    requests[task_id]['response'] = res;

    for (var i = 0; i < sockets.length; i++) {
        for (var j = 0; j < options.length; j++) {
            if (sockets[i] && (options[j].company_id == parseInt(sockets[i].company_id))) {
                console.log('Sent data to socket ' + i + ' ...');
                sockets[i].emit('notif', _get);
            }
        }
    }

    setTimeout(function () {
        delete requests[task_id];
        try {
            for (var i = 0; i < sockets.length; i++) {
                for (var j = 0; j < options.length; j++) {
                    if (options[j].company_id == sockets[i].company_id) {
                        console.log('Sent cancel to socket ' + i + ' ...');
                        sockets[i].emit('task-canceled', { task_id: task_id });
                    }
                }
            }
            requests[task_id]['responses'].end('{ "status": 0 }');
            delete requests[task_id];
        }
        catch (ex) {
        }
    }, 30000);
});

server.listen(4000);
