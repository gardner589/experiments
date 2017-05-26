<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>It's Working!</title>
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">

  </head>
  <body>
    @php
    // $url = 'https://media.giphy.com/media/IKy3MWMTUoX4Y/giphy.gif';
    $url = 'http://i.imgur.com/QMMtsAt.gif';
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
    font-family: 'Helvetica';
  }
  img{
    width: 100vw;
    height: 100vh;
  }
  .tester{
    width: 95vw;
    height: 95vh;
    background: url('data:image/gif;base64,{{$output}}') center no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
    flex-direction: column;
    /*justify-content: center;*/
    align-items: flex-start;
  }
  .tester a{
    position: absolute;
    z-index: auto;
    color: #777;
    font-size: 1em;
    text-decoration: none;
    background: rgba(56, 35, 15, .3);
    border-radius: 5px;
  }
  .tester a:hover{
    background: rgba(0,0,0, 1);
  }
  </style>


  <div class="tester">
    <a href="/nyc" class="btn btn-info">Wanna go to NYC?</a>
  </div>

<footer>Created with 💩 by <span class="name">some asshole</span></footer>
  </body>
</html>
