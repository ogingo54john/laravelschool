<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "posts";
    protected $fillable =[

        "user_id", "category_id", "title", "slug", "body", "image", "status","meta_title","meta_keyword","meta_description",
    ];

    /**
    * Return the sluggable configuration array for this model.
    *
    * @return array
    */
   public function sluggable(): array
   {
       return [
           'slug' => [
               'source' => 'title'
           ]
       ];
   }

   public function category(){
    return $this->belongsTo(Category::class, "category_id", "id");
   }

   public function user(){
    return $this->belongsTo(User::class, "user_id", "id");
   }

}
