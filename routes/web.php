<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Testimonialcontroller;

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
Route::prefix('testimonial')->group( function () {

      Route::get('createtestimonial',[Testimonialcontroller::class,'create'])->name ('createtestimonial');
      Route::post('storetestimonial',[Testimonialcontroller::class,'store'])->name ('storetestimonial');
      Route::get('testimonials',[Testimonialcontroller::class,'index'])->name('testimonials');
      Route::get('edittestimonial/{id}',[Testimonialcontroller::class,'edit'])->name('updatetestimonial');
      Route::put('update/{id}',[Testimonialcontroller::class,'update'])->name('update');
      Route::get('showtestimonial/{id}',[Testimonialcontroller::class,'show'])->name('show');
      Route::get('deletetestimonial/{id}',[Testimonialcontroller::class,'destroy']);
      Route::get('trashed',[Testimonialcontroller::class,'trashed'])->name('trashedtestimonial');
      Route::get('forceDelete/{id}',[Testimonialcontroller::class,'forceDelete']);
      Route::get('restoretestimonial/{id}',[Testimonialcontroller::class,'restore']);

});
