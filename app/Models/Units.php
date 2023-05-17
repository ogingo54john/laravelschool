<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;

class Units extends Model
{
    use HasFactory;
    protected $table="units";
    protected $fillable= [

        "unit_code",
        "title",
        "status",
        "courses_id"
    ];
    public function course(){
        return $this->belongsTo(Courses::class, "courses_id", "id");
    }
}
