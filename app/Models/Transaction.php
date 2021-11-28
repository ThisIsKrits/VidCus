<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'detail_videos_id', 'users_id', 'transaction_status'
    ];
 
    protected $hidden =[
 
    ];
 
    public function user(){
     return $this-> belongsTo(User::class, 'users_id', 'id'); 
    }

    public function detail_video(){
        return $this-> belongsTo(DetailVideo::class, 'detail_videos_id', 'id'); 
       }
}
