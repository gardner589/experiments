<?php

namespace App\Http\Controllers;

use App\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ShortUrlController extends Controller
{
    //
    public function redisbro(){
      $data = [
        'event' => 'somethingHappened',
        'data' => [
          'username' => 'Chris Gardner'
        ]
      ];

      Redis::publish('first-channel', json_encode($data));

      return view('welcome');
    }

    public function short(){
      return view('short.main');
    }

    public function draw(){
      return view('special.draw');
    }

    public function shorter(Request $request){
      // dd($request->ips());
      $url = new ShortUrl;
      $url->long = $request->url;
      $url->ip_addr = $request->ip();
      $url->save();
      $url->shortened = base64_encode($url->id);
      $url->save();
      return view('short.shorter', compact('url'));
    }

    public function shortest($findMe){
      $url = ShortUrl::find(base64_decode($findMe));

      if ($url == null) {

        return view('working');

      } elseif (starts_with($url->long, 'http') || starts_with($url->long, 'www')) {

        return redirect($url->long);

      }else{

        return redirect('http://'.$url->long);

      }
    }
    public function alladem()
    {
      $urls = ShortUrl::all();

      return view('special.alladem', compact('urls'));
    }

}
