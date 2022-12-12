<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\Car;

class PagesController extends Controller
{
    public function index(){

        $footer = Footer::all();
        $cars = Car::all();
        // dd($cars);
        return view('frontend.index', [
            'cars' => $cars
        ]);
    }
    
    public function about(){
        return view('frontend.about');
    }
    
    public function services(){
        return view('frontend.services');
    }
    
    public function pricing(){
        return view('frontend.pricing');
    }
    
    public function blog(){
        return view('frontend.blog');
    }
    
    public function contact(){
        return view('frontend.contact');
    }
    public function add_footer(){
        return view('admin.create_footer');
    }
    public function storefooter(Request $request){
        
        $footer = Footer::create([
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'post_code' => $request->input('post_code'),
            'country' => $request->input('country'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);
        
        return redirect('/');
    }
}
