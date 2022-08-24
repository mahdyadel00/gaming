<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Validator;

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
        return view('frontend.register');
    }

    protected function doRegister(Request $request)
    {

        // $request->validate([

        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|users',
        //     'password' => 'required',
        // ]);

        $users = User::query()->create([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        if ($users) {

            return redirect()->to(route('home'))->with('sucess', 'Successfully Register');
        } else {
            return redirect(route('register'))->withErrors([('Data Error !')]);
        }
    }
}
