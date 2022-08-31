<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\FavouriteProduct;
use App\Models\Product;

class FavouriteController extends Controller
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
    protected function create($product)
    {
        if (!Auth::user()) {
            return response()->json(['status' => 'failed', 'message' => ('You have to login to favorite product')]);
        }

        $product = Product::find($product);
        if ($product == null) {
            return response()->json(['status' => 'error', 'message' => ('Something Wrong Happened')]);
        } else {

            $favourite = FavouriteProduct::create([

                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
            ]);

            return response()->json(['status' => 'success', 'message' => ('Product added to your favorite successfully')]);
        }


    }

    protected function destroy($product)
    {

        if (!Auth::user()) {
            return response()->json(['status' => 'error', 'message' => ('Please Login First')]);
        }

        $product = Product::where('id', $product)->first();

        if ($product == null) {
            return response()->json(['status' => 'error', 'message' => ('Something Wrong Happened')]);
        }

        $favourite = FavouriteProduct::where('product_id', $product->id)->delete();

        return response()->json(['status' => 'success', 'message' => ('Product Removed Successfully')]);
    }


}
