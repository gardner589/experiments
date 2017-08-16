<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dubai</title>
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
      iframe{
        position:absolute;
        z-index: -100000;
        left: -9000em;
        top: -100em;
      }
    </style>
  </head>
  <body>
    <script src="/jq" charset="utf-8"></script>
    <script src="https://w.soundcloud.com/player/api.js" charset="utf-8"></script>
    <video src="http://a1.phobos.apple.com/us/r1000/000/Features/atv/AutumnResources/videos/comp_DB_D011_D009_SIGNCMP_v15_6Mbps.mov" autoplay playsinline loop type="video/mp4"></video>
    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/234929768&amp;color=666666&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

    <script type="text/javascript">
    // console.log($('iframe')[0])
    var widget = SC.Widget($('iframe')[0]);

    widget.bind(SC.Widget.Events.FINISH, function(){
      // console.log('play now');
      widget.play()
    })
    document.getElementsByClassName('clearfix session-info active-session-slug').style = 'perspective(800px) rotate('+c+'deg)';
//
// var c = 0;
// $('.clearfix.session-info').css('background', 'url(https://media.giphy.com/media/14hS1ZEmSfKdTW/giphy.gif) 100% center')
// $('.dropdown').css('z-index', '500')
// setInterval(function(){
//   c++;
//   $('.dropdown').css({
//     'transform': 'perspective(800px) rotate('+c*5+'deg)',
//     'background': '#a'+c+'b',
//     'box-shadow': '5px 5px 5px 5px #fff inset'
//   })
// })
// $(document).mousemove(function(e){
//   // c += 2;
// })
// var c = 0;
// var b = 0;
// var arr = ['red', 'blue', 'aqua', 'yellow', 'gold', 'white', 'maroon', 'green', 'lime']
// setInterval(function(){
//   c++;
//   if (b>=arr.length) {
//     b=0;
//   }
//   $('.member_preview_link').css('transform', 'perspective(600px) rotate('+c*20+'deg)')
//   $('.client_channels_list_container').css('background', arr[b])
//   $('#msgs_scroller_div').css('background', arr[b-1])
//   $('#col_channels_footer').css('background', arr[b+1])
//   $('.channel_header').css('background', arr[b+1])
//   $('#footer').css('background', arr[b-1])
//   b++
// }, 50)
//
//
// $('.member_preview_link').css('transform', 'perspective(600px) rotate('+e.pageX+'deg)')
// $(document).mousemove(function(e){
//     $('.clearfix.session-info.active-session-slug').css('transform', 'perspective(600px) rotateY('+e.pageX+'deg)')
// })
    </script>
  </body>
</html>
