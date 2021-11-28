<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class DetailVideo extends Model
{
    use SoftDeletes;

   protected $fillable = [
       'categories_id', 'title', 'slug', 'about'
       , 'images', ''
   ];

   protected $hidden =[

   ];

   public function category(){
    return $this-> belongsTo(Category::class, 'categories_id', 'id'); 
    }

    public function galleries(){
        return $this->hasMany(Gallery::class, 'detail_videos_id', 'id');
    }

    public function transaction(){
        return $this->hasMany(DetailVideo::class, 'detail_videos_id', 'id');
    }
}
