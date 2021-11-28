<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'detail_videos_id', 'video'
    ];
 
    protected $hidden =[
 
    ];
 
    public function detail_video(){
     return $this-> belongsTo(DetailVideo::class, 'detail_videos_id', 'id'); 
    }
}
