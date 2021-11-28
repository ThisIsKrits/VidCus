<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DetailVideo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $items  =   Category::all();
        $detail_videos = DetailVideo::all();

        return view('pages.home',[
            'items' => $items, 'detail_video' => $detail_videos
        ]);
    }
}
