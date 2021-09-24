<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;


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

Route::get('/', [NavController::class, 'index']);

Route::get('/liste', [NavController::class, 'liste']);

Route::get('/edit/{id}', [ActionController::class, 'edit']);

Route::get('/liste', [ActionController::class, 'show']);

Route::get('/addCharacter', [ActionController::class, 'addCharacter']);

Route::post('/addCharacter', [ActionController::class, 'storeCharacter']);

Route::post('/editCharacter/{id}', [ActionController::class, 'editCharacter']);

Route::post('/delete/{id}', [ActionController::class, 'deleteCharacter']);

// Route::resource('/', PostController::class);