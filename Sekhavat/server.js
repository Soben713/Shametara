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
    });

    socket.on('accept', function(msg) {

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

    requests[_get['task_id']] = {};
    requests[_get['task_id']]['companies'] = companies;

    for (var i = 0; i < sockets.length; i++) {
        console.log(sockets[i].company_id);
        if (sockets[i].company_id in companies) {
            console.log('Sent data to socket ' + i + ' ...');
            sockets[i].emit('notif', _get);
        }
    }

    setTimeout(function () {
        delete requests[_get['task_id']];
        try {
            for (var i = 0; i < sockets.length; i++) {
                if (sockets[i].company_id in companies) {
                    console.log('Sent cancel to socket ' + i + ' ...');
                    sockets[i].emit('task-canceled', { task_id: _get['task_id'] });
                }
            }
        }
        catch (ex) {
        }
    }, 30000);

    res.end();
});

server.listen(4000);
