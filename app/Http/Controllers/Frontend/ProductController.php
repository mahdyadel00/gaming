<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImageProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        session_start();
    }
    protected function index(Request $request)
    {
        $products = Product::with('user')->where('nigotiable', '!=', 1)->paginate(12);
        $categories = Category::get();
        if ($request->product_name) {
            $products = Product::with('user')->where('nigotiable', '!=', 1)->where('title_en', $request->product_name)->get();
        }
        if ($request->ajax()) {
            // $store = $request->store;
            $html = view('frontend.products.render', compact('categories', 'products'))->render();
            return response(['html' => $html, 'count' => $products->count()]);
        }
        return view('frontend.products.index', compact('products', 'categories'));
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
            'view' => 0,
        ]);
        if ($product) {
            return redirect()->back()->with('flash_message', 'Added Successfully !');
        }
    } //End of Store
    protected function single(Request $request, $id)
    {
        $product = Product::with('user')->where('id', $id)->first();
        $product_images = ImageProduct::where('product_id' , $product->id)->get();
        $product_related = Product::where('id', '!=', $id)->limit(3)->get();
        $product->increment('view', 1);
        return view('frontend.products.single', compact('product', 'product_related' , 'product_images'));
    }

    protected function search(Request $request)
    {
        $products = Product::where('category_id', 'LIKE', "%{$request->category_id}%")
            ->where('title_en', 'LIKE', "% .$request->search . %");
        if ($products) {
            return view('frontend.products.single', compact('products'));
        } else {
            return redirect()->back();
        }
    }
    public function uploadImage(Request $request)
    {
        $product = Product::where('id', $request->id)->first();

        $image = $request->file('image');
        $avatarName = $image->getClientOriginalName();
        if (!file_exists(public_path() . '/uploads/products/' . $product->id)) {
            mkdir(public_path() . '/uploads/products/' . $product->id , 0777, true);
        }
            $file_echo = (public_path('uploads' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . $product->id) . DIRECTORY_SEPARATOR . $avatarName);
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            }) // set true if you want proportional image resize
              ->save($file_echo);
            $imageUpload = new ImageProduct();
            $imageUpload->product_id = $product->id;
            $imageUpload->image = ('uploads' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . $product->id) . DIRECTORY_SEPARATOR . $avatarName;
            $imageUpload->save();
            return response()->json(['success' => 'success']);
        // }
    }
    protected function delete($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect()->back();
    }
    protected function promoted(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $product->update([
            'nigotiable' => 1,
        ]);
        return response()->json('success');
    }
    protected function removePromoted(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $product->update([
            'nigotiable' => 0,
        ]);
        return response()->json('success');
    }
    protected function promotedAds(Request $request)
    {
        $products = Product::with('user')->where('nigotiable', 1)->paginate(1);
        $categories = Category::get();
        return view('frontend.products.promoted', compact('products', 'categories'));
    }
}
