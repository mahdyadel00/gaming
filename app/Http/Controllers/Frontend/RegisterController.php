<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Auth;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Validator;
use Stevebauman\Location\Facades\Location;



use function GuzzleHttp\Promise\all;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function register()
    {
        $auth = Auth::first();
        $countries = Country::get();
        return view('frontend.register', compact('countries' , 'auth'));
    }

    protected function doRegister(Request $request)
    {
        // dd($request->all());
        // $request->validate([

        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|users',
        //     'password' => 'required',
        // ]);
        $ip = $request->ip(); //Dynamic IP address
        //$ip = '162.159.24.227'; /* Static IP address */
        $data = Location::get($ip);
        $image_in_db = NULL;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/users';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/users/' . $image_name;
        }
        if($data == false){
            $users = User::query()->create([

                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'country' => "Egypt",
                'phone' => $request->phone,
                'status' => $request->status ? 1 : 0,
                'image' => $image_in_db,
                'password' => Hash::make($request->password),

            ]);
        }else{

            $users = User::query()->create([

                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'country' => $data->countryName,
                'phone' => $request->phone,
                'status' => $request->status ? 1 : 0,
                'image' => $image_in_db,
                'password' => Hash::make($request->password),

            ]);
        }

        if ($users) {

            return redirect()->to(route('home'))->with('sucess', 'Successfully Register');
        } else {
            return redirect(route('register'))->withErrors([('Data Error !')]);
        }
    }
}
