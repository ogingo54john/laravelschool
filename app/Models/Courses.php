<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Units;

class Courses extends Model
{
    use HasFactory;
    protected $table = "courses";
    protected $fillable =[

        "title", "status"
    ];

    public function units(){
        return $this->hasMany(Units::class, "courses_id", "id");
    }



}
