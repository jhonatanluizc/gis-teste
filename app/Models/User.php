<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function validateUser($data) {
        $user = User::where([
        'email' => $data['email'],
        ])->first();

        if(!$user){
            return null;
        }

        if(!\Hash::check($data['password'], $user->password)){
            return null;
        }

        return $user;


        
    }

    public function changePassword($Newpassword)
    {
        return User::where('email', session('email') )
        ->update([
            'password' =>  \Hash::make($Newpassword),
        ]);
    }
}
