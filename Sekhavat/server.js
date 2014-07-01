/**
 * Created by mohammad on 7/1/14.
 */

var io = require('socket.io')(8080);
var http = require('http');

var sockets = [];

io.on('connection', function(socket) {
    sockets.push(socket);

    socket.emit('welcome', { hello: 'world'});

    socket.on('message', function (from, msg) {
        console.log("Message received from " + from + " saying " + msg);
    });

    socket.on('emdaad', function (msg) {
        console.log('New message : ');
        console.log(msg);

        // find the nearest rescuer e.g. nearest
        var options = {
            host: 'localhost',
            port: 8000,
            path: '/path/to/ajax',
            method: 'GET'
        };
        var req = http.request(options, function(res) {
            var nearest = sockets[0];
            nearest.emit('notification', msg);
        });
        req.end();
    });

    socket.on('disconnect', function() {
        sockets.splice(sockets.indexOf(socket), 1);
    });
});