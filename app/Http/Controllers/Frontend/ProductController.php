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
    protected function index()
    {

        $products = Product::with('user')->where('nigotiable' , '!=' , 1)->paginate(12);
        $categories = Category::get();

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
            'condition' => $request->condition,
            'authanticate' => $request->authanticate ? 1 : 0,
            'nigotiable' =>  0,
            'view' => 0,
        ]);
        if ($product) {
            return redirect()->back()->with('flash_message', 'Added Successfully !');
        }
    } //End of Store

    protected function single(Request $request, $id)
    {
        $product = Product::with('user')->where('id', $id)->first();
        $product_related = Product::where('id', '!=', $id)->limit(3)->get();
        $product->increment('view', 1);

        return view('frontend.products.single', compact('product', 'product_related'));
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

    public function uploadImage (){

        $File = $_FILES['file'];

        $FileName = $File['name'];
        $TmpLocation = $File['tmp_name'];
        $FileSize = $File['size'];
        $FileError = $File['error'];


        $FileExt = explode('.', $FileName);
        $FileExt = strtolower(end($FileExt));


        if ($FileError == 0) {

            $ImageFolder = "../upload";

            //Check if exist, otherwise create it!
            if (!is_dir($ImageFolder)) {
                mkdir($ImageFolder, 0777, true);
            } else {
            }


            //Create new filename:
            $NewName = uniqid('', true) . md5(uniqid(mt_rand(), true)) .time() .'.' . $FileExt;
            $UploadDestination = $ImageFolder . "/" . $NewName;

            //Move file to location:
            if (move_uploaded_file($TmpLocation, $UploadDestination)) {

                if(!isset($_SESSION['imagesArray'])){
                    $_SESSION['imagesArray']= array();
                }
                array_push( $_SESSION['imagesArray'], $NewName);
                echo $NewName;
            }


        }


    }
    protected function delete($id){

        $product = Product::where('id' , $id)->first();

        $product->delete();

        return redirect()->back();
    }

    protected function promoted(Request $request){

        $product = Product::where('id' , $request->id)->first();

        $product->update([

            'nigotiable' => 1,
        ]);

        return response()->json('success');
    }
    protected function promotedAds(Request $request){

        $products = Product::with('user')->where('nigotiable' , 1)->paginate(1);
        $categories = Category::get();


        return view('frontend.products.promoted', compact('products', 'categories'));
    }
}
