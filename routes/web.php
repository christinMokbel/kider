<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Testimonialcontroller;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\Appointmentcontroller;
use App\Http\Controllers\Teachercontroller;
use App\Http\Controllers\Subjectcontroller;




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
//part1
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
//part2
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
//part3
Route::post('contactmail',[Contactcontroller::class,'contactmail'])->name('contactmail');
Route::prefix('contact')->group( function () {
    Route::get('contacts',[Contactcontroller::class,'index'])->name('contacts');
    Route::get('showcontact/{id}',[Contactcontroller::class,'show'])->name('showcontact');
    Route::get('deletecontact/{id}',[Contactcontroller::class,'destroy'])->name('deletecontact');
    Route::get('trashedcontact',[Contactcontroller::class,'trashed'])->name('trashedcontact');
    Route::get('forceDeletecontact/{id}',[Contactcontroller::class,'forceDelete'])->name('forcedeletecontact');
    Route::get('restorecontact/{id}',[Contactcontroller::class,'restore'])->name('restorecontact');

});
Route::prefix('appointment')->group( function () {
    Route::get('appointments',[Appointmentcontroller::class,'index'])->name('appointments');
    Route::post('storeappointment',[Appointmentcontroller::class,'store'])->name ('storeappointment');
    Route::get('showappointment/{id}',[Appointmentcontroller::class,'show'])->name('showappointment');
    Route::get('deleteappointment/{id}',[Appointmentcontroller::class,'destroy'])->name('deleteappointment');
    Route::get('trashedappointment',[Appointmentcontroller::class,'trashed'])->name('trashedappointment');
    Route::get('forceDeleteappointment/{id}',[Appointmentcontroller::class,'forceDelete'])->name('forcedeleteappointment');
    Route::get('restoreappointment/{id}',[Appointmentcontroller::class,'restore'])->name('restoreappointment');

});

//part4
Route::prefix('teacher')->group( function () {

    Route::get('createteacher',[Teachercontroller::class,'create'])->name('createteacher');
    Route::post('storeteacher',[Teachercontroller::class,'store'])->name('storeteacher');
    Route::get('teachers',[Teachercontroller::class,'index'])->name('teachers');
    Route::get('editteacher/{id}',[Teachercontroller::class,'edit'])->name('editteacher');
    Route::put('updateteacher/{id}',[Teachercontroller::class,'update'])->name('updateteacher');
    Route::get('showteacher/{id}',[Teachercontroller::class,'show'])->name('showteacher');
    Route::get('deleteteacher/{id}',[Teachercontroller::class,'destroy'])->name('deleteteacher');
    Route::get('trashedteacher',[Teachercontroller::class,'trashed'])->name('trashedteacher');
    Route::get('forceDeleteteacher/{id}',[Teachercontroller::class,'forceDelete'])->name('forcedeleteteacher');
    Route::get('restoreteacher/{id}',[Teachercontroller::class,'restore'])->name('restoreteacher');

});
Route::prefix('subject')->group( function () {

    Route::get('createsubject',[Subjectcontroller::class,'create'])->name('createsubject');
    Route::post('storesubject',[Subjectcontroller::class,'store'])->name('storesubject');
    Route::get('subjects',[Subjectcontroller::class,'index'])->name('subjects');
    Route::get('editsubject/{id}',[Subjectcontroller::class,'edit'])->name('editsubject');
    Route::put('updatesubject/{id}',[Subjectcontroller::class,'update'])->name('updatesubject');
    Route::get('showsubject/{id}',[Subjectcontroller::class,'show'])->name('showsubject');
    Route::get('deletesubject/{id}',[Subjectcontroller::class,'destroy'])->name('deletesubject');
    Route::get('trashedsubject',[Subjectcontroller::class,'trashed'])->name('trashedsubject');
    Route::get('forceDeletesubject/{id}',[Subjectcontroller::class,'forceDelete'])->name('forcedeletesubject');
    Route::get('restoresubject/{id}',[Subjectcontroller::class,'restore'])->name('restoresubject');

});
// Route::middleware('auth')->prefix('cpanel')->group(function () {
//     Route::prefix('home')->controller(HomeController::class)->group(function () {
//         /*add new editor pages*/
//         Route::get('/index', 'index');
//     });