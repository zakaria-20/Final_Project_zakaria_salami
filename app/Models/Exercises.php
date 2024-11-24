<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercises extends Model
{
    //
    protected $fillable = [
        'sesion_id',
        'name',
        'image',
        'calories_burned',
    ];
   
    public function users() { return $this->belongsToMany(User::class, 'exercises_users', 'exercises_id', 'user_id') ->withPivot('is_done', 'is_favorite') ->withTimestamps(); }
}
