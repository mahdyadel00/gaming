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
    protected function index(){

        $products = Product::with('user')->get();
        $categories = Category::get();

        return view('frontend.products.index' , compact('products' , 'categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $categories =  Category::get();

        return view('frontend.products.create', compact('categories'));
    }

    protected function store(Request $request)
    {

        dd($request->all());
        // $request->validate([

        //     'title_en' => 'required',
        //     'title_ar' => 'required',
        //     'description_en' => 'required',
        //     'description_ar' => 'required',
        //     'price' => 'required',
        // ]);
        $image_in_db = NULL;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/products';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/products/' . $image_name;
        }


        $product = Product::query()->create([

            'category_id' => $request->category_id,
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'price' => $request->price,
            'image' => $image_in_db,
            'user_id' => Auth::user()->id,
            'condition' => $request->condition ? 1 : 0,
            'authanticate' => $request->authanticate ? 1 : 0,
            'nigotiable' => $request->nigotiable ? 1 : 0,
        ]);
        if ($product) {
            return redirect()->back()->with('flash_message', 'Added Successfully !');
        }
    }//End of Store

    protected function single(Request $request , $id)
    {
        $product = Product::with('user')->where('id' , $id)->first();
        $product_related = Product::where('id' , '!=' , $id)->limit(3)->get();


        return view('frontend.products.single' , compact('product' , 'product_related'));
    }
}
