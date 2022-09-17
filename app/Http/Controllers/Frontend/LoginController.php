<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\AuthImage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


use function GuzzleHttp\Promise\all;

class LoginController extends Controller
{

    protected function login()
    {
        $auth = AuthImage::first();
        return view('frontend.login' , compact('auth'));
    }

    protected function doLogin(Request $request)
    {

        $request->validate([

            'email' => 'required',
            'password' => 'required',
            // 'g-recaptcha-response' => 'required|captcha',
        ]);
        $remember_me = request('remember_me') == 1 ? true : false;

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->to(route('home'))->with('sucess', 'Successfully Login');
        } else {
            return redirect(route('login'))
                ->withInput($request->only('email', 'remember'))
                ->withErrors([('Data Error !')]);
        }
    }

    protected function logout(){
        auth()->logout();

        return redirect()->route('home');
    }
}
