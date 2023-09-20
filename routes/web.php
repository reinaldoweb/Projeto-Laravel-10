<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\{SupportController};

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato',[SiteController::class, 'contact']);


Route::get('/supports',[SupportController::class, 'index'])->name('supports.index');
Route::get('/supports/create',[SupportController::class, 'create'])->name('supports.create');
Route::post('/supports',[SupportController::class, 'store'])->name('supports.store');



