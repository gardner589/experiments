<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FLY-SCAPES</title>
    <script src="/jq" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">

</head>
  <style>
  body{
    background: black;
    font-family: 'Oswald';
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 1;
  }
  video{
    margin:auto;
    padding:0;
    width:90vw;
    z-index: 10;
    position: relative;
  }
  iframe{
    position:absolute;
    z-index: -100000;
    left: -9000em;
    top: -100em;
  }
  .prev{
    height: 100vh;
    background: linear-gradient(to left, rgba( 0, 0, 0, 0), #222);
    width: 5em;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: grey;
  }
  .next{
    height: 100vh;
    background: linear-gradient(to right, rgba( 0, 0, 0, 0), #222);
    width: 5em;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: grey;
  }
  .next:hover{
    background: linear-gradient(to right, rgba( 0, 0, 0, 0), #bbb);
    cursor: pointer;
  }
  .prev:hover{
    background: linear-gradient(to left, rgba( 0, 0, 0, 0), #bbb);
    cursor: pointer;
  }
  #wrds{
    position: fixed;
    z-index: 2000;
    -webkit-text-fill-color:  rgba(255, 255, 255, 0.15);
    font-size: 3em;
    top: -1em;
    left: 3em;
  }
  </style>
  <body>
<div id="wrds"><h1></h1></div>
    <div title="Previous Landscape" class="prev">
<
    </div>

<video src="" autoplay  playsinline loop>
</video>

<iframe width="560" height="315" src="https://www.youtube.com/embed/XKB5h2tJQHQ?autoplay=1&controls=0&loop=1&playsinline=1&showinfo=0&playlist=XKB5h2tJQHQ" frameborder="0" allowfullscreen></iframe>

<div title="Next Landscape" class="next">
>
</div>

<script type="text/javascript">
// vpaPWuDQUcc  //classical string
var count = 0
var feeler = [
  @foreach ($stuffs as $key => $val)
     ['{{ $val[0] }}', '{{$val[1]}}'],
  @endforeach
]
$('video').attr('src', feeler[0][0])
$('video')[0].playbackRate = 1.25
$('#wrds h1').html(feeler[0][1])
$('.next').click(function(){
  if (count < feeler.length) {
    count ++;
    console.log(feeler[count][1]);
    $('video').attr('src', feeler[count][0])
$('video')[0].playbackRate = 1.25
    $('#wrds h1').html(feeler[count][1])
  }else {
    count = 0;
    console.log(feeler[count][1]);
    $('video').attr('src', feeler[count][0])
$('video')[0].playbackRate = 1.25
    $('#wrds h1').html(feeler[count][1])
  }
})

$('.prev').click(function(){
  if (count > 0) {
    count --;
    console.log(feeler[count][1]);
    $('video').attr('src', feeler[count][0])
$('video')[0].playbackRate = 1.25
    $('#wrds h1').html(feeler[count][1])
  }else{
    count = 54;
    console.log(feeler[count][1]);
    $('video').attr('src', feeler[count][0])
$('video')[0].playbackRate = 1.25
    $('#wrds h1').html(feeler[count][1])
  }
})
</script>
  </body>
</html>
