<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\EmailSubscription;

class EmailSubscriptionController extends Controller
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

    protected function store(Request $request) {

        $email_sub =  EmailSubscription::create([

            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('success' ,'created Successfully Email');
    }

}
