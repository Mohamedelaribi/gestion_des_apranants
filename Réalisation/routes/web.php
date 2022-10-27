<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GestionPromotion;
use App\Http\Controllers\GestionApprenants;


Route::get('/', function(){
    return view('home');
});
Route::resource('promotion', GestionPromotion::class);

Route::get('search/{name}',[GestionPromotion::class,'search']);

Route::get('search',[GestionPromotion::class,'search']);


Route::get('promotion/apprenant/{id}', [GestionApprenants::class, 'create']);
Route::resource('apprenant', GestionApprenants::class);

