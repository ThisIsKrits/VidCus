<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Models\DetailVideo;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $items = Gallery::with(['detail_video'])->get();

        return view('pages.admin.gallery.index', [
            'items' => $items 
        ]);
    }

    public function create()
    {
        $detail_videos    = DetailVideo::all();

        return view('pages.admin.gallery.create',[
            'detail_video'   => $detail_videos
        ]);
    }
    
    public function store(GalleryRequest $request)
    {
        $data           = $request->all();
        $data['video']  = $request->file('video')->store(
            'assets/gallery', 'public'
        );
        
        Gallery::create($data);
        return redirect()->route('gallery.index');
    }

    public function edit($id)
    {
        $item       =   Gallery::FindOrFail($id);
        $detail_videos    = DetailVideo::all();

        return view('pages.admin.gallery.edit', [

            'item'  => $item,
            'detail_video' =>$detail_videos
        ]);
    }

    public function update(GalleryRequest $request, $id)
    {
        $data           = $request->all();
        $data['video']  = $request->file('video')->store(
            'assets/gallery', 'public'
        );
        
        $item       = Gallery::FindOrFail($id);
        
        $item->update($data);

        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $item = Gallery::FindOrFail($id);

       $item->delete();

       return redirect()->route('gallery.index');
    }
}
