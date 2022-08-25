<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class ProductController extends Controller
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
    public function create()
    {
        $categories =  Category::get();

        return view('frontend.products.create' , compact('categories'));
    }

    protected function store(Request $request){

        $request->validate([

            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'price' => 'required',
        ]);

        $product = Product::query()->create([

            'category_id' => $request->category_id,
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'price' => $request->price,
            'nigotiable' => $request->nigotiable ? 1 : 0,
        ]);

        if($product){

        }
    }

}
