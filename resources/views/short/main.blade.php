<!DOCTYPE html>
<html>
  <head>
    <?php
  $gif = [
     '0' => 'https://media.giphy.com/media/10bbPvzEG1NZWU/giphy.gif' ,
     '1' => 'http://data.whicdn.com/images/64940340/original.gif' ,
     '2' => 'https://media.giphy.com/media/14hS1ZEmSfKdTW/giphy.gif' ,
     '3' => 'https://68.media.tumblr.com/3b9427ad8ba6006f461fcd8b91cc6080/tumblr_obc8k4v3l01rctpomo1_400.gif',
     '6' => 'https://media.giphy.com/media/fRZn2vraBGiA0/giphy.gif' ,
     '5' => 'https://media.giphy.com/media/yhScPwKdCTuZW/giphy.gif' ,
     '4' => 'https://media.giphy.com/media/IKy3MWMTUoX4Y/giphy.gif'
    ];
?>
    <meta charset="utf-8">
    <title>URL Shortener</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,700" rel="stylesheet" type="text/css">
    <script src="/jq" charset="utf-8"></script>

    <style media="screen">
    body{
      width: 100vw;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: #f2f2f2;
      font-family: 'Raleway';
      padding: 0;
      margin: 0;
    }
    h3{
      background: url('{{$gif[date('w')]}}') no-repeat center;
      background-size: cover;
      -webkit-text-fill-color: transparent;
      -webkit-background-clip: text;
      font-size: 3em;
      padding:0;
    }
    #btn{
      border: .1px solid navy;
      border-radius: 10px;
      background: skyblue;
      color: #f2f2f2;
      box-shadow: 2px 2px 20px 1px grey;
    }
    #btn:hover{
      border: .1px solid skyblue;
      box-shadow: 0 0 0 0 #f2f2f2;
    }
    </style>
  </head>
  <body>
    <h3>Make a URL Shorter!</h3>
    {!! Form::open(['url' => '/shorter']) !!}

    {!! Form::label('url', 'URL: ') !!}
    {!! Form::text('url') !!}
    <input id="btn" type="submit">

    {!! Form::close() !!}

    <script type="text/javascript">
    $newVal = 1;
        $('body').on('mousewheel',function(evt){
          if(evt.originalEvent.deltaY > 0){
            $newVal += 2;
            $('h3').css('transform','perspective(600px) rotateY('+($newVal*7)+'deg)')
          }else{
            $newVal -= 2;
            $('h3').css('transform','perspective(600px) rotateY('+($newVal*7)+'deg)')
          }
        })
    </script>
  </body>
</html>

{{--
https://68.media.tumblr.com/3b9427ad8ba6006f461fcd8b91cc6080/tumblr_obc8k4v3l01rctpomo1_400.gif
http://data.whicdn.com/images/64940340/original.gif
https://media.giphy.com/media/14hS1ZEmSfKdTW/giphy.gif
https://media.giphy.com/media/Xp4E5EvYUJ0nm/giphy.gif
https://media.giphy.com/media/xb68TojBVb42s/giphy.gif
https://media.giphy.com/media/yhScPwKdCTuZW/giphy.gif
https://media.giphy.com/media/IKy3MWMTUoX4Y/giphy.gif
https://media.giphy.com/media/fRZn2vraBGiA0/giphy.gif
https://media.giphy.com/media/10bbPvzEG1NZWU/giphy.gif --}}
