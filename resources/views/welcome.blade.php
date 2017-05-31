<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="http://emojis.slackmojis.com/emojis/images/1450380010/150/dickbutt.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="http://emojis.slackmojis.com/emojis/images/1450380010/150/dickbutt.png">

        <title>ChitChat</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #7f7f7f;
                color: #999;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                width: 100vw;
                margin: 0;
            }

            body{
              display: flex;
              flex-direction: column;
              align-items: center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            ul{
              list-style-type: none;
              width: 80vw;
            }
            li:nth-child(even){
              background: #59afaf;
              color: white;
            }
            form{
              position: fixed;
              bottom: 0;
              left: 0;
              width: 100%;
            }
            form input{
              height: 3em;
              border-radius: 5px;
              width: 100%;
            }
            form button{
              position: fixed;
              bottom: 0;
              right: 0;
              height: 3.5em;
              background: #59afaf;
              border: 2px solid;
              border-radius: 3px;
              color: white;
            }
        </style>
    </head>
    <body>

      <h1>chitchat</h1>
      <ul>
        <li v-for="dude in dudes">
            <b>@{{ dude }}</b>
        </li>
      </ul>

            <form v-on:submit.prevent="send">
              <input v-model="message">
              <button type="submit" name="button">SEND</button>
            </form>

              <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.slim.js"></script>

        <script>
        var socket = io.connect('http://34.197.151.194:3000');

          new Vue({
            el: 'body',

            data: {
              dudes: [],
              message: ''
            },

            ready: function(){
              socket.on('first-channel:somethingHappened', function(data){
                // console.log(data);
                // this.dudes.push(data.username);
              }.bind(this));

              socket.on('new.msg', function(msg){
                this.dudes.push(msg)
              }.bind(this));
            },
            methods: {
              send: function(e){
                socket.emit('test.thing', this.message)
                this.message = '';
                e.preventDefault()
              }
            }

          })
        </script>
    </body>
</html>
