<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>See if it works!</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
            }
            li:nth-child(even){
              background: grey;
              color: white;
            }
        </style>
    </head>
    <body>

      <h1>chitchat</h1>

      <form v-on:submit.prevent="send">
        <input v-model="message">
        <button type="submit" name="button">Submit</button>
      </form>

      <ul>
        <li v-for="dude in dudes">
          <b>@{{ dude }}</b>
        </li>
      </ul>


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
