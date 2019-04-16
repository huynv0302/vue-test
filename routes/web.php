<?php
Route::get('/', 'client\HomeController@home');

Route::get('/Home', 'client\HomeController@home');

Route::get('login', 'client\AccountController@login');
Route::post('loginpost', 'client\AccountController@postLogin');
Route::get('logout', 'client\AccountController@logout');

// mobile framework7
Route::get('test',function(){
    return view('client.mobile.home');
});
Route::get('json', function(){
    return response()->json(['data' => 'hello']);
});