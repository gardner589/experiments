<?php
use App\ShortUrl;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/chitchat', 'ShortUrlController@redisbro');
Route::get('/', 'ShortUrlController@short');
Route::post('/shorter', 'ShortUrlController@shorter');
Route::get('/allurls', 'ShortUrlController@alladem');
Route::get('/symdraw', 'ShortUrlController@draw');

Route::get('/btz',function(){
return view('beats');
});

Route::get('/cardigan', 'ShortUrlController@cardigan');
Route::get('/cardz', 'ShortUrlController@cardz');
Route::post('/postcard', 'ShortUrlController@postcard');

Route::get('/bots',function(){
return view('robots');
});
Route::get('/bots2',function(){
return view('robots2');
});
Route::get('/dubai',function(){
return view('bai');
});

Route::get('/frisco',function(){
return view('frisco');
});

Route::get('/worx', function () {
    return view('working');
});


Route::get('/la', function(){
  return view('westworld');
  // https://youtu.be/O9Oc-WrQYZM
});


Route::get('/comT', function(){
    return view('com');

});


Route::get('/slomo', function(){
  return redirect('http://a1.phobos.apple.com/us/r1000/000/Features/atv/AutumnResources/videos/entries.json');
});
// Route::get('/tethtery', function(){
  // return redirect('https://api.instagram.com/v1/media/search?q=snowy&access_token=184873363.c981a5f.fb68dded966745509cba1df25acc2c06');
  // response()->json
// });

Route::get('/london', function(){
  return view('london');
});

Route::get('/sky', function(){
  return view('sky');
});

Route::get('/hawaii', function(){
  return view('hawaii');
  });

Route::get('/nyc', function(){
  return view('nyc');
  });

Route::get('/processing', function(){
  return readfile(resource_path('assets/js/processing.js'));
});


Route::get('/vidzs',function(){
  // CShopT9QUzw  |Swan Lake Waltz
  // sd4VsbM4fOo |Dance Of The Swans

  return '<video src="http://a1.phobos.apple.com/us/r1000/000/Features/atv/AutumnResources/videos/b4-1.mov" autoplay ></video>';
});

Route::get('/vids',function(){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://a1.phobos.apple.com/us/r1000/000/Features/atv/AutumnResources/videos/entries.json");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  $output = json_decode($output, true);
  $stuffs = [];
  foreach ($output as $key => $value) {
      foreach ($value['assets'] as $val) {
        $tuffs = array_push($stuffs, array($val['url'], $val['accessibilityLabel']));
      }
  }
  return view('watchem', compact('stuffs'));
});

Route::get('/jq', function(){
  return redirect('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');
});

Route::get('/gief', function(){
  return view('practice');
});

Route::get('/dilla', function(){
    return view('dilla');

});
Route::get('/dilla2', function(){
    return view('dilla2');

});


Route::get('/1am',function(){
return view('1am');
});

Route::get('/reasons',function(){
return view('reasons');
});

Route::get('/waii',function(){
return view('waii');
});

Route::get('/x',function(){
return view('x');
});

Route::get('/fails', function(){
  return view('fail');
});
Route::get('/wrkflw', function(){
  return view('workflow');
});


Route::get('/{str}', 'ShortUrlController@shortest');
