
{{-- @php
$hamz = file_get_contents($cardz->title);
@endphp --}}

@foreach ($cardz as $card)
  <a href="{{$card->title}}">{{$card->id}} video Dude!</a>
@endforeach
