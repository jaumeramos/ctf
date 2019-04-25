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

    $flags=\App\Flag::all()->pluck('name')->all();
    foreach ($teams as $t) {
      $flagsTeam=array_fill_keys($flags,false);
      foreach ($t->flags as $f){
        $flagsTeam[$f->name]=true;
      }
      $t->flags = $flagsTeam;
    }

    return view('ctf', [
      'flags' => $teams
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
