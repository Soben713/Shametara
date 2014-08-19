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
        requests[tid]['companies'].splice(requests[tid]['companies'].indexOf(socket.company_id), 1);
        console.log(socket.company_id + ' canceled');
        socket.emit('task-canceled', { task_id: msg.task_id });
        console.log('LEN: ', requests[tid]['companies'].length);
        if (requests[tid]['companies'].length < 1) {
            requests[tid]['response'].end('0');
            delete requests[tid];
        }
        console.log('sent response');
    });

    socket.on('accept', function(msg) {
        requests[msg.task_id]['response'].end('1');
        socket.emit('task-accepted', { task_id: msg.task_id });
        for (var i = 0; i < sockets.length; i++) {
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

    var companies = JSON.parse('[' + _get['company_ids'] + ']');
    var request_sender = _get['sender_company_id'];

    console.log('Companies', companies);

    var task_id = _get['task_id'];
    requests[task_id] = {};
    requests[task_id]['companies'] = companies;
    requests[task_id]['response'] = res;

    for (var i = 0; i < sockets.length; i++) {
        console.log(sockets[i].company_id);
        if (sockets[i].company_id in companies) {
            console.log('Sent data to socket ' + i + ' ...');
            sockets[i].emit('notif', _get);
        }
        else {
            requests[task_id]['companies'].splice(requests[task_id]['companies'].indexOf(sockets[i].company_id), 1);
        }
    }

    setTimeout(function () {
        delete requests[task_id];
        try {
            for (var i = 0; i < sockets.length; i++) {
                if (sockets[i].company_id in companies) {
                    console.log('Sent cancel to socket ' + i + ' ...');
                    sockets[i].emit('task-canceled', { task_id: task_id });
                }
            }
            requests[task_id]['response'].end('0');
            delete requests[task_id];
        }
        catch (ex) {
        }
    }, 30000);
});

server.listen(4000);
