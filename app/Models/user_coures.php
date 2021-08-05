<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_coures extends Model
{
    use HasFactory;
    protected $table = "user_coures";

    public function course()
    {
        return $this->belongsTo('app\course', 'id_course', 'id');
    }
    public function user()
    {
        return $this->belongsTo('app\user', 'id_user', 'id');
    }
}
