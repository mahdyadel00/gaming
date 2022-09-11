<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
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
    protected function category()
    {

        $categories = Category::paginate(12);

        return view('frontend.categories.index', compact('categories'));
    }

    protected function index(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();

        $products = Product::where('category_id', $category->id)->get();

        return view('frontend.categories.single', compact('category', 'products'));
    }
    protected function search(Request $request)
    {
        if ($request->category_id) {

            $category = Category::where('id', $request->category_id)->first();
            $products = Product::where('category_id', $category->id)->get();
        }
        // elseif (!$request->category_id || $request->search) {

        //     $product = Product::where('title_en', $request->search)->get();
        //     if ($product) {

        //         return view('frontend.products.single', compact('product'));
        //     } else {
        //         return response()->json('error');
        //     }
        // }
        if ($products) {

            return view('frontend.categories.single', compact('category', 'products'));
        } else {
            return response()->json('error');
        }
    }
}
