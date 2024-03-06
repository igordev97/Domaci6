<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[\App\Http\Controllers\HomepageController::class,"getAllOcene"]);
Route::get("/dodaj-ocenu",function (){
    $title = "Dodaj novu ocenu";
    return view("add-ocenu",compact("title"));
});
Route::post("/dodaj-novu-ocenu",[\App\Http\Controllers\OceneController::class,"dodajNovuOcenu"]);
