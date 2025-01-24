<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;


Route::get('/form', [homeController::class, 'afficher']); 
Route::post('/form', [homeController::class, 'ajouterNom']); 
