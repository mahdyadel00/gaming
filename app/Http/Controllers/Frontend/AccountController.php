<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function myAccount(Request $request)
    {
        if (Auth::check()) {

            $user = Auth::user();

            return view('frontend.accounts.my_account', compact('user'));
        } else {

            return redirect()->route('login.show')->with('Un Authanticated!');
        }
    }

    protected function help()
    {

        return view('frontend.accounts.help');
    }

    protected function favourite(){

        return view('frontend.accounts.favourite');
    }
}
