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

$('body').append('<canvas id="canvas" autofocus></canvas>');
var canvas = document.getElementById("canvas");
var count = 0;
function testerino (processing){
  processing.size(window.innerWidth - 10, window.innerHeight- 15);
  processing.background(0,0,0)

  var count = 80;
$(document).on('vmousemove', function(evt){
  evt.preventDefault()

    if (count > 260) {
      count = 80;
    }
    count ++;
    var mouse  = new PVector(evt.pageX, evt.pageY);
    var center = new PVector(processing.width/2, processing.height/2);
    mouse.sub(center);

    processing.resetMatrix();
    processing.translate(processing.width/2, processing.height/2);
    processing.strokeWeight(.75);
    processing.stroke('silver');

    var phi = Math.atan2(mouse.y, mouse.x);
    var rad=Math.sqrt(Math.pow(mouse.x,2)+Math.pow(mouse.y,2))

    processing.fill(count, 25 ,rad*count);

    for (var i=0;i<10;i++) {
  		phi+=Math.PI*2/10;
  		processing.ellipse(rad*Math.cos(phi),rad*Math.sin(phi), 22, 22);
  	}

  });
};
var processingInstance = new Processing(canvas, testerino);

</script>
  </body>
</html>
