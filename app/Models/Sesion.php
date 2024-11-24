<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    //
    protected $fillable = [
        'trainer_id',
        'name',
        'description',
        'start',
        'image',
        'day',
        'end',
        'is_premium',
        'available',
        'spots',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class,'sesion_users');
    }
    public function exercises()
    {
        return $this->hasMany(Exercises::class);
    }
    public function trainer() { 
        return $this->belongsTo(User::class, 'trainer_id');
    }
    public function isFull()
    {
        return $this->spots <= 0;
    }
}
