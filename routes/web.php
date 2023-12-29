<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GafaController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\GatoController;
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

Route::resources([
    'gafas'=> GafaController::class,
    'colors'=> ColorController::class,
    'gatos'=> GatoController::class,
])
;





