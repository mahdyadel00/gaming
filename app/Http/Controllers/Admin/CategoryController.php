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
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
            'title_en' => 'required|categories,title_en',
            'title_ar' => 'required|categories,title_ar',
            'description_en' => 'required|description_en',
            'description_ar' => 'required|description_ar',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',        
        ]);
        Category::create($request->all());
        flash()->success("Category Added successfully");
        return redirect()->route('category.index');
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
        $this->validate($request, [
            'name' => 'filled|unique:categories,name,' . $id,
            'title_en' => 'required|categories,title_en',
            'title_ar' => 'required|categories,title_ar',
            'description_en' => 'required|description_en',
            'description_ar' => 'required|description_ar',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',    
        ]);
        return redirect()->route('category.index');
    }

    
    flash()->success("Category updated successfully");

    public function destroy($id)
    {
        Category::find($id)->delete();
        return back();
    }
}
flash()->success("Category deleted successfully");
