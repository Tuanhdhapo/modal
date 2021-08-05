<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $table = "reviews";

    public function course()
    {
        return $this->belongsTo('app\course', 'id_course', 'id');
    }

    public function lessons()
    {
        return $this->belongsTo('app\lessons', 'id_lessons', 'id');
    }

    public function user()
    {
        return $this->belongsTo('app\user', 'id_user', 'id');
    }
}
