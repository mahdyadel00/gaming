<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
//		$this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    protected function index()
    {
        // dd(0);
        return view('admin.dashboard');

    }// end of index


}//end of controller
