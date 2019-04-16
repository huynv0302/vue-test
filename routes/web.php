<?php
Route::get('/', 'client\HomeController@home');

Route::get('/home', 'client\HomeController@home');

Route::get('login', 'client\AccountController@login');
Route::post('loginpost', 'client\AccountController@postLogin');
Route::get('logout', 'client\AccountController@logout');

Route::get('json2', function(){
    return response()->json(['data' => 'hello asdas as']);
});

Route::get('test',function(){
    return view('client.mobile.home');
});
Route::get('json', function(){
    return response()->json(['data' => 'hello asdas as']);
});