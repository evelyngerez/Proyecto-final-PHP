<?php
use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('index');
});

Route::resource("productos", ProductoController::class);












Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
});

Route::get("saludo", function(){
    return "Hola visitante";
})->middleware(['auth']);



Route::get('ofertas', function () {
    return view ('ofertas');

});


Route::get('sobrenosotros', function () {
    return view ('sobrenosotros');

});


Route::get('danostuopinion', function () {
    return view ('danostuopinion');

});


