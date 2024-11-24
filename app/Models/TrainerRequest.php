<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainerRequest extends Model
{
    //
    protected $fillable = ['user_id', 'status','pay']; 
    public function user() { 
        return $this->belongsTo(User::class); 
    }
}
