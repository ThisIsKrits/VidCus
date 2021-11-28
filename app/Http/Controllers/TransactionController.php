<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\DetailVideo;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Transaction::with(['detail_videos', 'galleries', 'user'])
        ->FindOrFail($id);

        return view('pages.video',[
        'item' => $item
        ]);
    }

    

    public function store(Request $request, $id){
        
        $detail = DetailVideo::FindOrFail($id);

        $transaction    = Transaction::create([
            'detail_videos_id' => $id,
            'users_id'          => Auth::user()->id,
            'transaction_status'=> 'PENDING'
        ]);


        return view('pages.create',[
            'transaction' =>$transaction
        ]);
    }


    public function success(Request $request, $id){

        $transaction = Transaction::FindOrFail($id);
        $transaction->transaction_status = 'APPROVE';

        $transaction->save();


        return view('pages.video');
    }
}
