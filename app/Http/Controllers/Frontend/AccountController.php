<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
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
    protected function myAccount(Request $request)
    {
        if (Auth::check()) {

            $user = User::with('country')->first();
            if(auth()->check()){

                $products = product::with('user')->where('user_id' , auth()->user()->id)->get();
            }

            return view('frontend.accounts.my_account', compact('user' , 'products'));
        } else {

            return redirect()->route('login.show')->with('Un Authanticated!');
        }
    }

    protected function edit()
    {
        if (Auth::check()) {

            $user = User::first();
            $countries = Country::get();

            return view('frontend.accounts.edit_profile', compact('user' , 'countries'));
        }
    }//End of Edit Profile

    protected function update(Request $request , $id){

        // dd($request->all());
        $user = User::where('id' , $id)->first();

        $image_in_db = NULL;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/user';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/user/' . $image_name;
        }
        // dd($id);
        $user->where('id' , $id)->update([

            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            // 'country_id'  => $request->country_id,
            'image'  => $image_in_db,
        ]);

        return redirect()->back()->with('success' , 'Updated Profile Sucessfully');
    }

    protected function help()
    {

        return view('frontend.accounts.help');
    }

    protected function favourite()
    {

        return view('frontend.accounts.favourite');

    }//End of favourite

    protected function promoted(){

        $products = Product::where('user_id' , auth()->user()->id)->where('nigotiable' , 1)->get();

        return view('frontend.accounts.promotede_add' , compact('products'));
    }
    protected function memberShip(){

        return view('frontend.accounts.member_ship');
    }

}
