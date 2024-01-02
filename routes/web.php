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


// desuso
// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


// prueba de envio de datos desde una variable de ruta a las vistas
Route:: get('/custom', function () {
    $msj = 'mensaje desde el servidor';
    
    return view('custom', ['msj' => $msj]);
});


// It displays a record from the database in a view.
Route::get('/', [App\Http\Controllers\TestController::class, 'test']);
