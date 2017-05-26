<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>It's Working!</title>
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
<script src="/jq" charset="utf-8"></script>
      <script src="https://w.soundcloud.com/player/api.js" charset="utf-8"></script>
  </head>
  <body>
    @php
    // $url = 'https://media.giphy.com/media/IKy3MWMTUoX4Y/giphy.gif';
    $url = 'https://media.giphy.com/media/MIGr8809EFu1O/giphy.gif';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    // close curl resource to free up system resources
    curl_close($ch);
    $output = base64_encode($output);
    @endphp
  <style media="screen">
  body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'Lemonada';
    background: black;
  }
  img{
    width: 95vw;
    height: 95vh;
  }
  .tester{
    width: 80vw;
    height: 98vh;
    background: url('data:image/gif;base64,{{$output}}') center no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .tester a{
    position: absolute;
    z-index: auto;
    color: #777;
    font-size: 2em;
  }
  iframe{
          position:absolute;
          z-index: -100000;
          left: -9000em;
          top: -100em;
        }
  </style>
{{-- <img src="http://i.imgur.com/QMMtsAt.gif" alt=""> --}}


  <div class="tester">
    {{-- <a href="/nyc" class="btn btn-info">N.Y.C.</a> --}}
  </div>
<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/84590623&amp;color=ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

<script type="text/javascript">
      var widget = SC.Widget($("iframe")[0]);

      widget.bind(SC.Widget.Events.FINISH, function(){
        widget.play()
      })
      </script> 
 </body>
</html>


