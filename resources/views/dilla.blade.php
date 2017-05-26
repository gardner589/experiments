<html>
  <head>
    <meta charset="utf-8">
    <title>J Dilla</title>
    <script src="/jq"></script>
    <style media="screen">
      body{
        background: black;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 1;
      }
      video{
        margin:auto;
        padding:0;
        height:98vh;
        z-index: 100;
      }

      .protal{
        z-index: 150;
        width: 80px;
        height: 80px;
        position: fixed;
        border-radius: 50%;
        background: url(http://www.adultswim.com/promos/rickmobile/static/img/portal.png) center no-repeat;
        box-shadow: 1px 1px 35px 1px white ;
        animation: rot 2s infinite linear;
      }

      @keyframes rot{
        from {transform: rotate(0deg);}
        to {transform: rotate(360deg);}
      }

    </style>
  </head>
  <body>
    <div class="protal">

    </div>
{{-- <iframe style="width:98vw;height:98vh;" src="https://www.youtube.com/embed/XKB5h2tJQHQ?autoplay=1&loop=1&cc_load_policy=1rel=0&amp;controls=0&amp;showinfo=0&playlist=XKB5h2tJQHQ" frameborder="0" allowfullscreen></iframe> --}}
{<iframe style="width:98vw;height:98vh;" src="https://www.youtube.com/embed/W50QQLK4BF0?autoplay=1&loop=1&cc_load_policy=1rel=0&amp;controls=0&amp;showinfo=0&playlist=W50QQLK4BF0" frameborder="0" allowfullscreen></iframe>
{{--https://www.youtube.com/watch?v=W50QQLK4BF0&feature=share --}}
<script type="text/javascript">
$('.protal').hide()
setTimeout(function(){
  $('.protal').fadeIn()
  count = 0
    if (count > 150) {
      count = 147
    }
    count += 5
    $('.protal').css({
      'bottom': count+'px',
      'left': count+'px'
    })
}, 1000)
</script>
  </body>
</html>
