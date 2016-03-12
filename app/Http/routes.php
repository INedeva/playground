<?php



Route::get('/', function () {
  return view('welcome');
});
Route::get('home','HomeController@index' );

Route::get('contact', 'PagesController@contact');
Route::get('about','PagesController@about');

Route::get('/database', function () {
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
