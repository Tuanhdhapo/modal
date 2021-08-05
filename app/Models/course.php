<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = "course";

    public function course_tags()
    {
        return $this->hasMany('app\course_tags', 'id_course', 'id');
    }

    public function tags()
    {
        return $this->hasManyThrough('app\tags', 'app\course_tags', 'id_course', 'id_course_tags', 'id');
    }

    public function lessons()
    {
        return $this->hasMany('app\lessons', 'id_course', 'id');
    }

    public function user_lessons()
    {
        return $this->hasManyThrough('app\user_lessons', 'app\lessons', 'id_course', 'id_lessons', 'id');
    }

    public function user_coures()
    {
        return $this->hasMany('app\user_course', 'id_course', 'id');
    }

    public function User()
    {
        return $this->hasManyThrough('app\User', 'app\user_coures', 'id_course', 'id_user_coures', 'id');
    }

    public function reviews()
    {
        return $this->hasMany('app\reviews', 'id_course', 'id');
    }
}
