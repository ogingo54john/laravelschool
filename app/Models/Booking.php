<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modesls\Pricing;
class Booking extends Model
{
    use HasFactory;
    protected $table ="bookings";
    protected $fillable = [
        "name","email", "phone", "message","package"
    ];

    public function pricing(){
        return $this->belongsTo(Pricing::class, "pricing_id", "id");
    }
}
