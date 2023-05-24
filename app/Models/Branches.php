<?php

namespace App\Models;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branches extends Model
{
    use HasFactory;
    protected $table = "branches";
    protected $fillable = [
       "title", "initial", "status",
    ];

    public function staffs(){
        return $this->hasMany(Staff::class,"branch_id","id");
    }
}
