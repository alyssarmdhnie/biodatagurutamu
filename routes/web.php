<?php
use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Ini adalah rute tanpa MVC
route::get('/rutebaru',function ()
{
    return '<h1 style="color:pink;">ini adalah rute baru tanpa MVC</h1>';
});



//ini adalah rute dengan view
Route::get('/ruteview', function () {
    return view('ruteview');
});

//ini adalah rute dengan view & controller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);

//ini adalah rute dengan view, controller & Model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDatamodel']);

//ini adalah rute Biodata
Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);