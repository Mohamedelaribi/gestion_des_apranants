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


// gestion apprenants route
Route::get('promotion/{id}/apprenant/create', [GestionApprenants::class, 'create'])->name('apprenant_create');
Route::get('promotion/apprenant/{id}/edit', [GestionApprenants::class, 'edit'])->name('apprenant_edit');
Route::post('promotion/apprenant/{id}/edit', [GestionApprenants::class, 'update'])->name('apprenant_update');
// Route::get('promotion/{id}/apprenant', [GestionApprenants::class, 'index'])->name('apprenant.index');
Route::resource('apprenant', GestionApprenants::class);



