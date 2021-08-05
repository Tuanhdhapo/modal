<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    protected $table = "tags";

    public function course_tags()
    {
        return $this->hasMany('app\course_tags', 'id_tags', 'id');
    }
}
