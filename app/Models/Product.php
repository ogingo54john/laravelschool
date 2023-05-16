<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "name","description","price","slug","image","meta_title","meta_keyword","meta_description", "status","older_price","quantity","features","faq"
    ];
}
