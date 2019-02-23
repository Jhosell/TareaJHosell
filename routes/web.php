<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});

Route::get('consejos', function (){
    return view('consejos');
});

Route::get('vocabulario', function (){
    return view('vocabulario');
});

Route::get('multimedia', function (){
    return view('multimedia');
});
