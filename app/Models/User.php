<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "image",
        'name',
        'email',
        'password',
        "weight",
        "height",
        'age',
        'gender',
        'calories',
        'expires_at',
        
    ];
    public function roles(){
        return $this->belongsToMany(Role::class,"user_roles");
    }
    public function hasRole($roles){
        return $this->roles()->whereIn("name",$roles)->exists();
    }
    // public function sessions()
    // {
    //     return $this->hasMany(Sesion::class, 'trainer_id','sesion_users');
    // }
//     public function sessions()
// {
//     return $this->belongsToMany(Sesion::class, 'sesion_users', 'user_id', 'sesion_id')->withPivot("pay")->withTimestamps();;
// }
public function sessions()
{
    return $this->belongsToMany(Sesion::class, 'sesion_users', 'user_id', 'sesion_id')
                ->withPivot('pay')
                ->withTimestamps();
}


    // public function sessionss()
    // {
    //     return $this->hasMany(Sesion::class,'sesion_users');
    // }
    public function exercises() { 
        return $this->belongsToMany(Exercises::class, 'exercises_users', 'user_id', 'exercises_id') ->withPivot('is_done', 'is_favorite') ->withTimestamps();
    }
    public function Reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    protected $casts = [
        'expires_at' => 'datetime',
    ];
    
}
