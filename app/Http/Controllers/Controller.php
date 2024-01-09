<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function classes(){
        return view('classes');
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
        return view('team');
    }
    public function testimonial(){
        return view('testimonial');
    }
    public function __invoke()
    {
        return view('404');
    }
    
}
