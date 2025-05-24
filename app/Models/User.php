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

    const IS_VALID_EMAIL=1;
     const IS_INVALID_EMAIL=0;

    const ADMIN_ROLE='ADMIN';
    const DRIVER_ROLE='DRIVER';
    const CUSTOMER_ROLE='CUSTOMER';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    public static function generateOTP($lenght = 6){
        if($lenght<=0){
            return '';
        }

        $otp='';
        for($i=0;$i<$lenght;$i++){
            $otp = mt_rand(0,9);
        }

        return $otp;
    }




    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
}
