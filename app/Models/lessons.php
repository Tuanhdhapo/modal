<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    use HasFactory;
    protected $table = "lessons";

    public function course()
    {
        return $this->belongsTo('app\course', 'id_course', 'id');
    }

    public function user_lessons()
    {
        return $this->hasMany('app\user_lessons', 'id_lessons', 'id');
    }

    public function reviews()
    {
        return $this->hasMany('app\reviews', 'id_lessons', 'id');
    }
}
