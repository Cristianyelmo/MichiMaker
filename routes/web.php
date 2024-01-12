<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GafaController;
use App\Http\Controllers\CamisetaController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\GatoController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\ExpresionController;
use App\Http\Controllers\SombreroController;
use App\Http\Controllers\indexController;
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
/* Route::get('/', function () {
    return view('welcome');
}); 
 */

/* Route::resources([
    'gafas'=> GafaController::class,
    'colors'=> ColorController::class,
    'gatos'=> GatoController::class,
])
; */
Route::middleware('checkRole:1')->group(function () {
    Route::resources([
        'gafas'=> GafaController::class,
        'colors'=> ColorController::class,
        'expresions'=> ExpresionController::class,
        'sombreros'=> SombreroController::class,
        'camisetas'=> CamisetaController::class,
        
    ]);

});



Route::middleware('checkRole:2')->group(function () {
    Route::resources([
        
        'gatos'=> GatoController::class,
       
    ]);
  
    Route::get('/gatos', [GatoController::class, 'index']);
    Route::get('/gatos/edit', [GatoController::class, 'edit']);
    Route::post('/gatos/edit', [GatoController::class, 'update']);
    Route::post('/gatos/create', [GatoController::class, 'store']);
    Route::get('/gatos/create', [GatoController::class, 'create']);
    Route::delete('/gatos/{gato}', [GatoController::class, 'destroy'])->name('gatos.destroy');

});

Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login', [loginController::class,'login']);

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'register']);

Route::get('/logout', [logoutController::class,'logout'])->name('logout');
/* Route::get('/', function () {
    return view('template');
}); */


Route::get('/', [indexController::class,'index'])->name('template');






