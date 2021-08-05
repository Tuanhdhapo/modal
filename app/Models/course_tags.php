<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_tags extends Model
{
    use HasFactory;
    protected $table = "course_tags";

    public function course()
    {
        return $this->belongsTo('app\course', 'id_course', 'id');
    }
    public function tags()
    {
        return $this->belongsTo('app\tags', 'id_tags', 'id');
    }
}
