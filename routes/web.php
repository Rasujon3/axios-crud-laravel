<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AxoisCrud;

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

Route::get('/', [AxoisCrud::class, 'ShowInfo']);
Route::post('/OnInsert', [AxoisCrud::class, 'OnInsert']);
Route::get('/OnSelect', [AxoisCrud::class, 'OnSelect']);
Route::get('/delete/{id}', [AxoisCrud::class, 'OnDelete']);
Route::get('/edit/{id}', [AxoisCrud::class, 'OnEdit']);
Route::post('/update/{hiddenId}', [AxoisCrud::class, 'OnUpdate']);
