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
contacto*/

// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route:: get('/custom', function () {
    $msj = 'mensaje desde el servidor';
    
    return view('custom', ['msj' => $msj]);
});

Route::get('/', [App\Http\Controllers\TestController::class, 'test']);
