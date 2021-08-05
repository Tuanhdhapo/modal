<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $table = "User";
    public function course()
    {
        return $this->hasManyThrough('app\course', 'app\user_coures', 'id_user', 'id_user_coures', 'id');
    }
    public function lessons()
    {
        return $this->hasManyThrough('app\lessons', 'app\user_lesspns', 'id_user', 'id_user_lessons', 'id');
    }

    public function user_lessons()
    {
        return $this->hasMany('app\user_lessons', 'id_user', 'id');
    }

    public function user_coures()
    {
        return $this->hasMany('app\user_course', 'id_user', 'id');
    }

    public function reviews()
    {
        return $this->hasMany('app\reviews', 'id_user', 'id');
    }
}
