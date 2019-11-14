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
    return view('welcome');
});

Route::get('/log', function () {
    $user = 'To use of our service you have to register with us';
    
    return view ('login',[
        'newUser' => $user
    ]);
});

Route::get('/sign', function() {

    $tools = ['laravel','docker','js'];

    return view ('signin', [
        'combination' => $tools
    ]);
});

Route::get('/sub', function() {

    $mysubject = ['pd', 'oop', 'pm', 'startup'];

    return view ('student.subject', [
        'subjectTaken' => $mysubject
    ]);
});
