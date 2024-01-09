<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
// Route::fallback(function(){
//        return redirect ('page/error404');
//     });
Route::get('index',[Controller::class,'index'])->name('index');
Route::get('about',[Controller::class,'about'])->name('about');
Route::get('classes',[Controller::class,'classes'])->name('classes');
Route::get('contact',[Controller::class,'contact'])->name('contact');
Route::prefix('page')->group( function () {
    Route::get('error404',[Controller::class,'error404'])->name('error404');
    Route::get('appointment',[Controller::class,'appointment'])->name('appointment');
    Route::get('call',[Controller::class,'call'])->name('call');
    Route::get('facility',[Controller::class,'facility'])->name('facility');
    Route::get('team',[Controller::class,'team'])->name('team');
    Route::get('testimonial',[Controller::class,'testimonial'])->name('testimonial');
});
Route::fallback(Controller::class);
