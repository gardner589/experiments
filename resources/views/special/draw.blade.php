<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>!!DRAW!!</title>
    <script src='/processing'></script>
    <script src='/jq'></script>

    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    {{-- <button type="button" name="button" data-toggle="modal" data-target="#myModal"></button> --}}
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"> &#9889; </button>
              <h4 class="modal-title">Choose a color</h4>
            </div>
            <div class="modal-body">
              <div class="form-row">
                <label for="color">Color: </label>
                <input type="color" name="color" >
              </div>
              <div class="form-row">
                <label for="num">Stroke Width: </label>
                <input type="number" name="stroke" value="20">
              </div>
              <div class="form-row">
                <label for="num">Stroke Count: </label>
                <input type="number" name="num" value="">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-success" data-dismiss="modal">Go!</button>
            </div>
          </div>
        </div>
    </div>


<script type="text/javascript">
$('#myModal').modal({
    backdrop: 'static',
    keyboard: false
})

$('#myModal').modal('show');

$('#myModal').on('hidden.bs.modal', function (e) {

  var stroke = parseInt($('input[name="stroke"]').val())

  var numb = parseInt($('input[name="num"]').val())
  var r = parseInt($('input[name="color"]').val().split('#')[1].substring(0,2), 16)
  var g = parseInt($('input[name="color"]').val().split('#')[1].substring(2,4), 16)
  var b = parseInt($('input[name="color"]').val().split('#')[1].substring(4,6), 16)
  var rgbs = [ {num: r, color: 'red'}, {num: g, color: 'green'}, {num: b, color: 'blue'} ];
  rgbs.sort(function(a, b) {
    return a.num - b.num;
  });


  // console.log(e);
  // console.log('[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]');
  // console.log([r,g,b]);
  // console.log('[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]');
  // console.log(rgbs[1].color);
  // console.log(rgbs[2].color);
  // console.log('[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]');

  $('body').append('<canvas id="canvas" autofocus></canvas>');
  var canvas = document.getElementById("canvas");
  var count = 0;
  function testerino (processing){
    processing.size(window.innerWidth - 4, window.innerHeight- 4);
    processing.background(0,0,0)

    var count = 80;
  $(document).on('vmousemove', function(evt){
    evt.preventDefault()

      if (count > 10) {
        count = 0;
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

      for (var i=0;i<numb;i++) {
    		phi+=Math.PI*2/numb;
    		processing.ellipse(rad*Math.cos(phi),rad*Math.sin(phi), 22, 22);
    	}

    });
    $(document).on('mousemove', function(evt){
      var colrz = new PVector(r+count,g+count,b+count);
      console.log(colrz);


      evt.preventDefault()

      if (count > 100) {
        count = 0;
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

      // processing.fill(count, 25 ,rad*count);
      processing.fill(r+count,g+count,b+count);

      for (var i=0;i<numb;i++) {
        phi+=Math.PI*2/numb;
        processing.ellipse(rad*Math.cos(phi),rad*Math.sin(phi), stroke, stroke);
      }

    });
  };
  var processingInstance = new Processing(canvas, testerino);

})


</script>
  </body>
</html>
