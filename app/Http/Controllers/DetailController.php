<?php

namespace App\Http\Controllers;

use App\Models\DetailVideo;
use App\Models\Gallery;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = DetailVideo::with(['galleries'])
        ->where('slug', $slug)
                ->FirstOrFail();


        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
