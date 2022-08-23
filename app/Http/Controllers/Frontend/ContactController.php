<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

use function GuzzleHttp\Promise\all;

class ContactController extends Controller
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
    protected function index()
    {
        return view('frontend.contacts.form');
    }

    protected function store(Request $request){

        // dd($request->all());
        if($request->published) {
            $request->published = 1;
        } else {
            $request->published = 0;
        }
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $contact = Contact::query()->create([

            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'message'  => $request->message,
            'published' => $request->published ,
        ]);

        return response()->json('success');    }
}
