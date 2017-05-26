<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Reasons</title>
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
      <video src="http://a1.phobos.apple.com/us/r1000/000/Features/atv/AutumnResources/videos/comp_DB_D011_C010_v10_6Mbps.mov" autoplay playsinline loop type="video/mp4"></video>
      <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/238866827&amp;color=666666&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

      <script type="text/javascript">
      var widget = SC.Widget($("iframe")[0]);

      widget.bind(SC.Widget.Events.PLAY, function(){
          widget.seekTo(114500)
      })

      widget.bind(SC.Widget.Events.FINISH, function(){
        widget.play()
      })
      </script>
    </body>
  </html>
