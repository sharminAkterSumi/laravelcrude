<?php

use App\Http\Controllers\postcontroller;
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

Route::get('/',[postcontroller::class,'home'])->name('addpost');
Route::get('/allpost',[postcontroller::class,'allpost'])->name('allpost');
Route::post('/store',[postcontroller::class,'storepost'])->name('poststore');
Route::get('/edit-post/{id}',[postcontroller::class,'edit'])->name('editpost');
Route::put('/update-post{id}',[postcontroller::class,'update'])->name('postupdate');
Route::delete('delete-post/{id}',[postcontroller::class,'delete'])->name('deletepost');