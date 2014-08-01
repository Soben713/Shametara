/**
 * Created by mohammad on 7/1/14.
 */

var io = require('socket.io')(8090);
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

    socket.on('disconnect', function() {
        sockets.splice(sockets.indexOf(socket), 1);
    });
});

var server = http.createServer(function(req, res) {
    var _get = url.parse(req.url, true).query;
    for (var i = 0; i < sockets.length; i++) {
        if (sockets[i].company_id == _get['company_id']) {
            sockets[i].emit('notif', _get);
            break;
        }
    }
});

server.listen(3030);