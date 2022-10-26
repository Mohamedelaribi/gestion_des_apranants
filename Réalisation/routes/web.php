<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GestionPromotion;


Route::get('/', function(){
    return view('home');
});
Route::resource('test', GestionPromotion::class);

Route::get('search/{name}',[GestionPromotion::class,'search']);

Route::get('search',[GestionPromotion::class,'search']);