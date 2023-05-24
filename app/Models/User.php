<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Staff;
use App\Models\Profile;
use App\Models\Student;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_as'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userProfile(){
        return $this->hasOne(Profile::class, "userId", "id");
    }
    public function userPost(){
        return $this->hasMany(Post::class, "user_id", "id");

    }
    public function student(){
        return $this->hasOne(Student::class, "user_id", "id");
    }
    public function staff(){
        return $this->hasOne(Staff::class, "user_id", "id");
    }
}
