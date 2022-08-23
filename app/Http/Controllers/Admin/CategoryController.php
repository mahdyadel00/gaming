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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $categories = Category::create([

            'title_en'  => $request->title_en,
            'title_ar'  => $request->title_ar,
            'description_en'  => $request->description_en,
            'description_ar'  => $request->description_ar,
            'image'  => $request->image,
        ]);
        flash()->success("Category Added successfully");
        return redirect()->route('admin.categories.index');
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

        $category->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
        ]);

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'filled|mimes:png,jpg,jpeg',
            ]);
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/posts');
            $category->update([
                'image' => $image
            ]);
        }
        flash()->success("Category Updated successfully");
        return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return back();
        flash()->success("Category deleted successfully");

    }

}
