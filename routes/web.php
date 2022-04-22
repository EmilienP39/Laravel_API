<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\FrontController::class, 'index'])->name("all-partner");

Route::get('/pictures', [\App\Http\Controllers\PictureController::class, 'index'])->name("all-pictures");

Route::get('/image',[\App\Http\Controllers\FrontController::class, 'image'])->name("upload-image");

Route::post('image-upload', [ \App\Http\Controllers\PictureController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::get('create-partner',[\App\Http\Controllers\FrontController::class,'createPartner'])->name('create-partner');

Route::post('store-partner',[\App\Http\Controllers\PartnerController::class,'storePartner'])->name('store-partner');

Route::get('vote-up-partner/{id}',[\App\Http\Controllers\PartnerController::class,'voteUpPartner'])->name('vote-up-partner');

Route::get('vote-down-partner/{id}',[\App\Http\Controllers\PartnerController::class,'voteDownPartner'])->name('vote-down-partner');

Route::get('add-picture/{partnerId}',[\App\Http\Controllers\PictureController::class,'addPicture'])->name('add-picture');

Route::delete('delete-partner/{id}',[\App\Http\Controllers\PartnerController::class,'delete'])->name('delete-partner');
