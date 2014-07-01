/**
 * Created by mohammad on 7/1/14.
 */

var io = require('socket.io')(8080);

io.on('connection', function(socket) {
    socket.emit('welcome', { hello: 'world'});

    socket.on('message', function (from, msg) {
        console.log("Message received from " + from + " saying " + msg);
    });
});