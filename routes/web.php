<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    $teams = \App\Team::all();
    $flags = \App\Flag::all()->count();

    $out=[];
    foreach ($teams as $t) {
    	$points = 0;
    	$out[$t->id]['longName']=$t->longName;
    	foreach ($t->flags as $f){
    		$out[$t->id][$f->name]=true;
    		$points+=$f->points;
    	}
    	$out[$t->id]['points']=$points;
    }
    usort($out, function($a, $b) {
        return $b['points'] <=> $a['points'];
    });

    return view('ctf', [
      'flags' => $flags,
      'teams' => $out
    ]);
});

Route::get('team/{id}', function ($id) {

  $team = App\Team::where('id',1)->first();
  $flags = $team->flags()->orderBy('name');

  return view('team', [
    'longName' => $team->longName,
    'flags' => $flags
  ]);
});




Route::get('/capture', function () {
    return view('capture');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

use Illuminate\Http\Request;

Route::post('/capture', function (Request $request) {
    $data = $request->validate([
        'longName' => 'required|max:200',
    ]);

    $flag = App\Flag::where('longName', 'UakrtmMJlk9')->first();

    if ($flag) echo "sii"; else echo "noo";

    $link = tap(new App\TeamFlag($data))->save();

    return redirect('/');
});
