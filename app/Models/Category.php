<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;

   protected $fillable = [
       'category', 'slug_category', 'images'
   ];

   protected $hidden =[

   ];

   public function galleries(){
    return $this->hasMany(DetailVideo::class, 'categories_id', 'id');
    }
}
