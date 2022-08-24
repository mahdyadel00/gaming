<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use function GuzzleHttp\Promise\all;

class LoginController extends Controller
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
    protected function login()
    {
        return view('frontend.login');
    }

    protected function doLogin(Request $request)
    {

        $request->validate([

            'email' => 'required',
            'password' => 'required',
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

        return redirect('/');
    }
}
