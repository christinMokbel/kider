<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Teacher;
use App\Models\Subject;
use App\Traits\Common;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use Common;
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $testimonials =Testimonial::where('published',1)->latest()->take(2)->get();
        $teachers =Teacher::where('published',1)->latest()->take(3)->get();
        $subjects =Subject::where('published',1)->latest()->take(6)->get();

        return view('index',compact('testimonials','teachers','subjects'));
    }
    public function about(){
        $teachers =Teacher::where('published',1)->latest()->take(3)->get();

        return view('about',compact('teachers'));
    }
    public function classes(){

        $testimonials =Testimonial::where('published',1)->latest()->take(3)->get();

        $subjects =Subject::where('published',1)->latest()->take(6)->get();

        return view('classes',compact('testimonials','subjects'));
    }
    public function contact(){
        return view('contact');
    }
    public function error404(){
        return view('404');
    }
    public function appointment(){
        return view('appointment');
    }
    public function call(){
        return view('call');
    }
    public function facility(){
        return view('facility');
    }
    public function team(){
        $teachers =Teacher::where('published',1)->latest()->take(6)->get();

        return view('team',compact('teachers') );
    }
    public function testimonial(){
        $testimonials =Testimonial::where('published',1)->latest()->take(3)->get();

        //$testimonials =Testimonial::get();
        return view('testimonial',compact('testimonials'));
       // return view('testimonial');
    }
    public function __invoke()
    {
        return view('404');
    }
    
}
