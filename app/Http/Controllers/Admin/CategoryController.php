<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $items = category::all();

        return view('pages.admin.category.index', [
            'items' => $items 
        ]);
    }

    public function create()
    {
        return view('pages.admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $data           = $request->all();
        $data['slug_category']   = Str::slug($request->category);
        $data['images']  = $request->file('images')->store(
            'assets/category', 'public'
        );
        
        
        Category::create($data);
        return redirect()->route('category.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item    = Category::FindOrFail($id);

        return view('pages.admin.category.edit', [

            'item'  => $item,
        ]);
    }

    public function update(CategoryRequest $request, $id)
    {
        $data           = $request->all();
        $data['slug_category']   = Str::slug($request->category);
        $data['images']  = $request->file('images')->store(
            'assets/cateogry', 'public'
        );
        
        $item       = Category::FindOrFail($id);
        
        $item->update($data);

        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
       $item = Category::FindOrFail($id);

       $item->delete();

       return redirect()->route('category.index');
    }
}
