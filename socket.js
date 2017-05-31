var server = require('http').Server();
var io = require('socket.io')(server);
var Redis = require('ioredis');
var redis = new Redis();
var Wasabilib = require('wasabilib-for-node');
var Gritter = require('wasabilib-gritter');
// var response = new Wasabilib.Response(new Gritter('my message','my Title'));

redis.subscribe('first-channel');

redis.on('message', function(channel, message){
  message = JSON.parse(message)
  console.log(channel +':' + message.event + ' ' + message.data.username);
  // io.emit(channel +':' + message.event, message.data);
  // io.emit(channel +':' + message.event, response);

});
io.on('connection', function(socket){
  console.log('this is a string');

  socket.on('test.thing', function(message){
    console.log('New message: '+ message);
    io.emit('new.msg', message);
  })
});

server.listen(3000);
