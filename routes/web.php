<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
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

/*Route::get('/home', function () {
    return view('index', [
        'navbar' => 0
    ]);
})->name('home');
Route::get('/create', function () {
    return view('create', [
        'navbar' => 1
    ]);
})->name('create');
Route::get('/about', function () {
    return view('about', [
        'navbar' => 2
    ]);
})->name('about');



Route::get('/', GameController::class .'@index')->name('index');

Route::post('/create', GameController::class . '@create')->name('index.create');

Route::post('/', GameController::class .'@store')->name('index.store');

Route::get('/games', GameController::class .'@show')->name('index.show');

Route::put('/edit{games}', GameController::class .'@edit')->name('index.edit');

Route::put('/{games}', GameController::class .'@update')->name('index.update');

Route::delete('/games', GameController::class .'@destroy')->name('index.destroy');

*/

Route::get('/', [GameController::class , 'index'])->name('index');
Route::get('/create', [GameController::class , 'create'])->name('create');
Route::post('/create', [GameController::class , 'store'])->name('store');
Route::put('/update', [GameController::class , 'update'])->name('update');
Route::get('/edit/{gm}', [GameController::class , 'edit'])->name('edit');
Route::get('/delete/{gm}', [GameController::class , 'destroy'])->name('destroy');
Route::get('/about', [GameController::class , 'about'])->name('about');