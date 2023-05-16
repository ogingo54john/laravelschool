<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = "profile";
    protected $fillable = [
        "userId","phone","image","bio","address","zipcode","dob","facebook","github","instagram","twitter","linkedln"
            ];
}
