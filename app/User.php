<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
        'admin', 'can_login', 'comment', 'qualification_id', 'driver_license_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function numbers()
    {
        return $this->hasMany('\App\PhoneNumber');
    }

    public function default_phone()
    {
        return $this->numbers()->first();
    }

    public function license()
    {
        return $this->belongsTo('\App\DriverLicense');
    }

    public function qualification()
    {
        return $this->belongsTo('\App\Qualification');
    }

    public function vehicles()
    {
        return $this->belongsToMany('\App\Vehicle');
    }
}
