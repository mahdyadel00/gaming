<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        //		$this->middleware('guest')->except('logout');
        $this->middleware('auth:admin')->except('logout');
    }
    protected function index()
    {

        $users = User::get();
        return view('admin.users.index', compact('users'));
    } // end of index

    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'country_id' => 'required',
        ]);
       
        $users = User::create([
            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'email'  => $request->email,
            'password'  => $request->password,
            'phone'  => $request->phone,
            'status'  => $request->status,
            'country_id'  => $request->country_id,
        ]);
        return redirect()->route('admin.users.index')->with('Successfully' , 'User Added Successfully');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $this->validate($request, [
            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'email'  => $request->email,
            'password'  => $request->password,

        ]);
       
        


        $user->update([
            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'email'  => $request->email,
            'password'  => $request->password,
        ]);

        return redirect()->route('admin.users.index')->with('flash_message', 'User Updated successfully !');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return back();
        flash()->success("User deleted successfully");

    }

}//end of controller
