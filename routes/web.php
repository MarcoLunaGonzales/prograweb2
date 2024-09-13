<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// Route::get('/prueba', function(){
//     $a = 10;
//     $b = 55;
//     $multiplicacion = $a * $b;
//     return "Hola chicos que no ponen atencion!!!! $multiplicacion";
// });

// Route::get('/prueba', function(){
//     $a = 10;
//     $b = 55;
//     $multiplicacion = $a * $b;
//     return "Hola chicos que no ponen atencion!!!! $multiplicacion";
// });


// Route::get('/prueba', function(){
//     $a = 10;
//     $b = 55;
//     $multiplicacion = $a * $b;
//     return "Hola chicos que no ponen atencion!!!! $multiplicacion";
// });


// Route::get('/prueba', function(){
//     $a = 10;
//     $b = 55;
//     $multiplicacion = $a * $b;
//     return "Hola chicos que no ponen atencion!!!! $multiplicacion";
// });

/*SECCION DE PRODUCTOS*/
Route::get('/suma', [TestController::class,'sumaTest']);

Route::get('/vistatest', function () {
    return view('test');
});
