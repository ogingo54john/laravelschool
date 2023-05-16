<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
class Pricing extends Model
{
    use HasFactory;
    use Sluggable;
   protected $table = "pricings";
    protected $fillable = [
"name","slug","description","price"
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function bookings(){
        return $this->hasMany(Booking::class, "pricing_id", "id");
       }
}
