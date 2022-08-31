<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::get();
        $slider = Slider::first();
        $slider_right = Slider::skip(1)->first();
        $slider_left = Slider::skip(2)->first();
        $slider_top = Slider::skip(3)->first();
        $banners = Banner::get();

        return view('frontend.layouts.index', compact('categories' , 'slider' , 'slider_right' , 'slider_left' , 'slider_top' , 'banners'));
    }


}
