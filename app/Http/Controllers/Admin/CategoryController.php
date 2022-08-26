<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        ]);
        $image_in_db = NULL;
        if( $request->has('image') )
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path().'/uploads/categories';
            $image = request('image');
            $image_name = time().request('image')->getClientOriginalName();
            $image->move($path , $image_name);
            $image_in_db = '/uploads/categories/'.$image_name;
        }

        $categories = Category::create([

            'title_en'  => $request->title_en,
            'title_ar'  => $request->title_ar,
            'description_en'  => $request->description_en,
            'description_ar'  => $request->description_ar,
            'image'  => $image_in_db,

        ]);
        return redirect()->route('admin.categories.index')->with('Successfully' , 'Category Added Successfully');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {

        $category = Category::find($id);

        $this->validate($request, [
            'title_en' => 'filled',
            'title_ar' => 'filled',
            'description_en' => 'filled',
            'description_ar' => 'filled',

        ]);
        $image_in_db = NULL;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/products';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/products/' . $image_name;
        }


        $category->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $image_in_db,
        ]);

        return redirect()->route('admin.categories.index')->with('flash_message', 'Category Updated successfully !');
    }

    public function delete($id)
    {
        $category = Category::where('id' , $id)->first();
        $category->delete();
        return back();
        flash()->success("Category deleted successfully");

    }

}
