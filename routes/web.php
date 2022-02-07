<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'index'])->name('user.index');
Route::post('/login',[AuthController::class,'login']);

Route::get('/signup',[AuthController::class,'signup'])->name('user.cr');
Route::post('/singup',[AuthController::class,'create'])->name('user.create');

Route::get('/home',[AuthController::class,'home'])->name('user.home');

Route::get('/logout',function(){
    session()->flush();
    return redirect()->route('user.index');
})->name('user.logout');