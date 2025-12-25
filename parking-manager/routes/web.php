<?php

use App\Http\Controllers\AutoaController;
use Illuminate\Support\Facades\Route;

//auto zerrenda
Route::GET('/', [AutoaController::class, 'index']);
//formularioa 
Route::GET('/autoa',[AutoaController::class, 'create']);
//erregistro berri bat gordetzeko
Route::POST('/autoa', [AutoaController::class, 'store']);
//bilatu orria
Route::GET('/bilatu',[AutoaController::class,'bilatu']);
//bilatu matrikula
Route::GET('/search',[AutoaController::class, 'search']);
//erregistro bat ezabatzeko
Route::delete('/autoa/{id}',[AutoaController::class,'delete']);
//bilaketa aurreratua
Route::get('/bilaketa-aurreratua', [AutoaController::class, 'bilaketaAurreratua']);
