<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zip_codes', function () {
    //return \App\zip_code::all();
    $zip_code=\App\zip_code::all();
     return view('zip_codes',['zip_codes'=>$zip_code]);

});

Route::controller('zip_codes','zip_codescontroller');


function getCreat()
{
	return view('create_zip_codes');
}