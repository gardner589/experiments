<style media="screen">
  .balls{
    border: 1px solid red;
    background: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
    z-index: 10000;
    position: fixed;
    top: 0;
    flex-direction: column;
    overflow: scroll;
    /*display: none;*/
  }
  .balls video{
    width: 80vw;
  }
</style>

<script src="/jq" charset="utf-8"></script>
@php
$hamz = file_get_contents("https://m.xhamster.com/search/$num.html?search=$qury");
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://m.xhamster.com/search/.html');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// $output = curl_exec($ch);
// dd($output);
@endphp

{{-- <div class="balls">

</div> --}}
<div class="fick">
  {!!$hamz!!}
</div>
{!! Form::open() !!}
{!! Form::close() !!}

<script type="text/javascript">
$token = $('input[name=_token]').attr('value');

$.each($('.item-container a'), function(k,v){

  // console.log($(v).parent().html());

  $.get($(v).attr('href'),function(resp){
    // console.log(resp);
    console.log($(resp).find('#player').find('a').attr('href'));

    $url = 'http://shirc.pro/postcard';
    $data = {
      '_token': $token,
      'title' : $(resp).find('#player').find('a').attr('href')
    }
    $.ajax({
       url: $url,
       method: 'POST',
       data: $data,
     })

    // $('.balls').append('<video src="'+$(resp).find('#player').find('a').attr('href')+'" ></video><br><a href="'+$(resp).find('#player').find('a').attr('href')+'">SEE THIS SHIT NOW!!!</a><br><br>')
  }).then(function(){
  })
})

$('.fick').remove()
</script>
