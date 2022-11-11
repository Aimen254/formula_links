<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\FormulaController;
use App\Http\Controllers\ImageformController;
use App\Http\Controllers\UserformulaController;
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
Route::resource('allimage', ImageController::class);//Image add views route
Route::resource('imaget', UserformulaController::class);//user side image select and enter width
// Route::get('imagecreate', [ImageController::class,'create'])->name('create');
 Route::post('storeimage', [ImageController::class,'store'])->name('allimage.store');


 Route::resource('formula', FormulaController::class);//formula add views route
 Route::resource('imageform', ImageformController::class);//image and formula assign route