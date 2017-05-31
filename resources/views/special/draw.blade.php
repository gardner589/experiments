<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>!!DRAW!!</title>
    <script src='/processing'></script>
    <script src='/jq'></script>

    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
          canvas{
            position: fixed;
            top: 0;
            left:  0;
            /*z-index: 9999999999;*/
          }
          html, body{
            overflow: hidden;
            height: 100%;
            width: 100%;
            position: relative;
          }
    </style>
  </head>
  <body>


<script type="text/javascript">
// navigator.geolocation.getCurrentPosition(function(position){
//   console.log(position.coords.latitude+ ' and ' +position.coords.longitude)
// })

// $.post( "https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyCJduVob8ySqred2PKCOxzmWOpUnOtaa54", function(success) {
//         console.log(success.location.lat)
//         console.log(success.location.lng)
//   })

$('body').append('<canvas id="canvas" autofocus></canvas>')
var canvas = document.getElementById("canvas");
var count = 0;
function testerino (processing){
  processing.size(window.innerWidth - 10, window.innerHeight- 15);
  processing.background(200,200,200)

  var count = 80;
$(document).on('vmousemove', function(evt){
  evt.preventDefault()

    if (count > 250) {
      count = 75;
    }
    count ++;
    var mouse  = new PVector(evt.pageX, evt.pageY);
    var center = new PVector(processing.width/2, processing.height/2);
    mouse.sub(center);

    processing.resetMatrix();
    processing.translate(processing.width/2, processing.height/2);
    processing.strokeWeight(2);

    processing.stroke(0, count, 150);
    processing.fill(count, 0, mouse.y);
    processing.ellipse(mouse.x,mouse.y, 30,30);

    processing.stroke(0, count, 150);
    processing.fill(0, 0, mouse.x*count);
    processing.ellipse(mouse.y,mouse.x, 30,30);

    processing.stroke(0, count, 150);
    processing.fill(mouse.x,0, count);
    processing.ellipse(mouse.x*-1,mouse.y*-1, 30,30);

    processing.stroke(0, count, 150);
    processing.fill(0, count*mouse.y, 0);
    processing.ellipse(mouse.y*-1,mouse.x*-1, 30,30);
  });
};
var processingInstance = new Processing(canvas, testerino);
</script>
  </body>
</html>
