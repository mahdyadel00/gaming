<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    
    public function index()
    {
        $settings = Settings::get();
        return view('admin.settings.index', compact('settings'));
    }


    public function create()
    {
        return view('admin.settings.create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'title_en' => 'required',
            'title_ar' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'start_from' => 'required',
            'end_at' => 'required',
        ]);

        $logo_in_db = NULL;
        if( $request->has('logo') )
        {
            // $request->validate([
            //     'logo' => 'required|logo|mimes:jpeg,png,jpg,gif,svg,webp',
            // ]);

            $path = public_path().'/uploads/settings';
            $logo = request('logo');
            $logo_name = time().request('logo')->getClientOriginalName();
            $logo->move($path , $logo_name);
            $logo_in_db = '/uploads/settings/'.$logo_name;
        }

        $settings = Settings::create([

            'title_en'  => $request->title_en,
            'title_ar'  => $request->title_ar,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'start_from'  => $request->start_from,
            'end_at'  => $request->end_at,
            'logo'  => $logo_in_db,

        ]);
        return redirect()->route('admin.settings.index')->with('Successfully' , 'Settings Added Successfully');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $setting = Settings::find($id);
        return view('admin.settings.edit', compact('setting'));
    }


    public function update(Request $request, $id)
    {

        $setting = Settings::find($id);

        $this->validate($request, [
            'title_en' => 'filled',
            'title_ar' => 'filled',
            'email' => 'filled',
            'phone' => 'filled',
            'start_from' => 'filled',
            'end_at' => 'filled',
        

        ]);
        $logo_in_db = NULL;
        if ($request->has('logo')) {
            $request->validate([
                'logo' => 'required|logo|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/settings';
            $logo = request('logo');
            $logo_name = time() . request('logo')->getClientOriginalName();
            $logo->move($path, $logo_name);
            $logo_in_db = '/uploads/products/' . $logo_name;
        }
        $setting->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_from' => $request->start_from,
            'end_at' => $request->end_at,
            
            'logo' => $logo_in_db,
        ]);

        return redirect()->route('admin.settings.index')->with('flash_message', 'Settings Updated successfully !');
    }

    public function delete($id)
    {
        $setting = Settings::where('id' , $id)->first();
        $setting->delete();
        return back();
        flash()->success("Settings deleted successfully");

    }

}
