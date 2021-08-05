<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_lessons extends Model
{
    use HasFactory;
    protected $table = "user_lessons";

    public function user()
    {
        return $this->belongsTo('app\user', 'id_user', 'id');
    }
    public function lessons()
    {
        return $this->belongsTo('app\lessons', 'id_lessons', 'id');
    }
}
