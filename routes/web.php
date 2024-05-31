<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('User.index');




})->middleware(['auth', 'verified','user'])->name('dashboard');
  
Route::get('home',[UserController::class,'home']);
Route::get('contact',[ContactController::class,'create']);
Route::post('contact',[ContactController::class,'store']);
Route::get('service',[UserController::class,'indexuser']);
Route::get('about',[UserController::class,'aboutuser']);








Route::get('/admin', function () {
    return view('Admin.admin');
})->middleware(['auth', 'verified','admin'])->name('admin');
Route::get('contactdetails',[ContactController::class,'index']);
Route::get('contact/{id}/del',[ContactController::class,'delete']);
Route::get('contact/{id}/edit',[ContactController::class,'edit']);
Route::Post('contact/{id}/edit',[ContactController::class,'update']);
Route::get('sercreate',[ServiceController::class,'create']);
Route::Post('sercreate',[ServiceController::class,'store']);
Route::get('serdetail',[ServiceController::class,'index']);
Route::get('ser/{id}/edit',[ServiceController::class,'edit']);
Route::post('ser/{id}/edit',[ServiceController::class,'update']);
Route::get('ser/{id}/delete',[ServiceController::class,'delete']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
