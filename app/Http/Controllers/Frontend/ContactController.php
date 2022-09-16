<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

use function GuzzleHttp\Promise\all;

class ContactController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    protected function index()
    {
        return view('frontend.contacts.form');
    }

    protected function store(Request $request)
    {

        if ($request->published) {
            $request->published = 1;
        } else {
            $request->published = 0;
        }
        $contact = Contact::where('email', $request->email)->first();
        if (isset($contact)) {
            $contact->update([

                'first_name'     =>     $request->first_name,
                'last_name'      =>     $request->last_name,
                'email'          =>     $request->email,
                'phone'          =>     $request->phone,
                'message'        =>     $request->message,
                'published'      =>     $request->published,
            ]);
            return response()->json('success');
        } else {

            $contact = Contact::query()->create([

                'first_name'     =>     $request->first_name,
                'last_name'      =>     $request->last_name,
                'email'          =>     $request->email,
                'phone'          =>     $request->phone,
                'message'        =>     $request->message,
                'published'      =>     $request->published,
            ]);

            return response()->json('success');
        }
    }

    protected function aboutUs()
    {

        return view('frontend.about_us');
    }
}
