<?php

//use App\Http\Controllers\Tugas5;

use App\Http\Controllers\Tugas6;
use Illuminate\Support\Facades\Route;

//Tugas5
//Route::get('/', [Tugas5::class, 'index']);

//Tugas6
Route::get('/',[Tugas6::class,'latihan']);
//No 1
Route::get('/index',[Tugas6::class,'index']);
Route::get('/identity',[Tugas6::class,'identity']);
Route::get('/family',[Tugas6::class,'family']);
