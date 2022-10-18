<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

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
        $countries = Country::get();
        $roles = Role::pluck('name','name')->all();


        return view('admin.users.create', compact('countries','roles'));
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
            'roles_name' => 'required',
        ]);

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

        $users = User::create([
            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'email'  => $request->email,
            'password'  => $request->password,
            'phone'  => $request->phone,
            'status'  => $request->status ? 1 : 0,
            'country_id'  => $request->country_id,
            'image'  => $image_in_db,
            'roles_name'  => $roles_name,
        ]);
        return redirect()->route('admin.users.index')->with('Successfully', 'User Added Successfully');
    }

    public function show($id)
    {
    }


    protected function edit($id)
    {
        $user = User::where('id', $id)->first();
        $roles = Role::get();
        $countries = Country::get();
        return view('admin.users.edit', compact('user', 'countries' , 'roles'));
    }


    protected function update(Request $request, $id)
    {
        $ip = $request->ip(); //Dynamic IP address
        //$ip = '162.159.24.227'; /* Static IP address */
        $data = Location::get($ip);

        $user = User::where('id', $id)->first();
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'roles_name' => 'required',
        ]);

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
            $user->update([
                'first_name'  => $request->first_name,
                'last_name'  => $request->last_name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'status'  => $request->status ? 1 : 0,
                'country'  => 'Egypt' ,
                'image'  => $image_in_db,
                'roles_name'  => $image_in_db,
            ]);
        }else{
            $user->update([
                'first_name'  => $request->first_name,
                'last_name'  => $request->last_name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'status'  => $request->status ? 1 : 0,
                'country' => $data->countryName,
                'image'  => $image_in_db,
                'roles_name'  => $image_in_db,
            ]);

        }
        return redirect()->route('admin.users.index')->with('flash_message', 'User Updated successfully !');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return back();
        flash()->success("User deleted successfully");
    }

    protected function logout(){

        auth()->logout();

        return redirect('/');
    }
}//end of controller
