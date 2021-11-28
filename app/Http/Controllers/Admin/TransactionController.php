<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Models\DetailVideo;
use App\Models\Gallery;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Transaction::with(['detail_videos', 'galleries', 'user'])
        ->FindOrFail($id);

        return view('pages.admin.transaction.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        $detail_videos    = DetailVideo::all();

        return view('pages.admin.transaction.create',[
            'detail_video'   => $detail_videos
        ]);
    }

    public function store(Request $request, $id){
        
        $detail = DetailVideo::FindOrFail($id);

        $transaction    = Transaction::create([
            'detail_videos_id' => $id,
            'users_id'          => Auth::user()->id,
            'transaction_status'=> 'PENDING'
        ]);


        return view('pages.admin.create',[
            'transaction' =>$transaction
        ]);
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
}
