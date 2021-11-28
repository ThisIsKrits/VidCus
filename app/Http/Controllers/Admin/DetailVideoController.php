<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DetailVideoRequest;
use App\Models\DetailVideo;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DetailVideoController extends Controller
{
    public function index(Request $request)
    {
        
        $items = DetailVideo::with(['category'])->get();

        return view('pages.admin.detail-video.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('pages.admin.detail-video.create',
        [
            'categories' => $categories
        ]
    );
    }

    public function store(DetailVideoRequest $request)
    {
        $data = $request->all();
        $data['slug']   = Str::slug($request->title);
        $data['images']  = $request->file('images')->store(
            'assets/thumbnails', 'public'
        );
        
        DetailVideo::create($data);
        return redirect()->route('detail-video.index');
    }

    public function edit($id)
    {
        
        $item       =   DetailVideo::FindOrFail($id);
        $categories    = Category::all();

        return view('pages.admin.detail-video.edit', [

            'item'  => $item,
            'categories' =>$categories
        ]);
    }

    public function update(DetailVideoRequest $request, $id)
    {
        $data           = $request->all();
        $data['slug']   = Str::slug($request->title);
        $data['images']  = $request->file('images')->store(
            'assets/thumbnails', 'public'
        );
        
        $item       = DetailVideo::FindOrFail($id);
        
        $item->update($data);

        return redirect()->route('detail-video.index');
    }

    public function destroy($id)
    {
        $item = DetailVideo::FindOrFail($id);

        $item->delete();
 
        return redirect()->route('detail-video.index');
    }
}
