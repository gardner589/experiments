
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<style media="screen">
  body{
    background: url('https://media.giphy.com/media/14hS1ZEmSfKdTW/giphy.gif') ;
    background-size: cover;
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .x{
    color:white;
    top: 0;
    right: 14px;
    font-size: 2em;
    position: absolute;
    cursor: pointer;
  }
</style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <div class="row">
      <div class="col m12">
        <div class="card-panel lighten-4 blue pulse" style="border: 2px solid white;">
          {{-- <span class="x"  >&times;</span> --}}
          <span class="white-text">
            <h3 class="center-align">403</h3>
            <p>Forbidden</p>
            {{-- <h5>YOUR MACHINE HAS BEEN COMPROMISED</h5> --}}
          </span>
        </div>
      </div>
    </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

      <script type="text/javascript">
        // $('.x').click(function(){
        //   var $toastContent = $('<span >Perchase confirmed!</span>');
        //   Materialize.toast($toastContent, 15000, 'green accent-4 white-text pulse');
        // })
      </script>
    </body>
  </html>
