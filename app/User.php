<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

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
        'admin', 'can_login', 'comment', 'qualification_id', 'driver_license_id',
        'tactical_qualification_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function get_name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function get_formal_name()
    {
        return $this->last_name . ', ' . $this->first_name;
    }

    public function numbers()
    {
        return $this->hasMany('\App\PhoneNumber');
    }

    public function default_phone()
    {
        return $this->numbers()->where('is_default', true)->first();
    }

    public function driver_license()
    {
        return $this->belongsTo('\App\Model\Tactics\DriverLicense');
    }

    public function qualification()
    {
        return $this->belongsTo('\App\Model\Tactics\Qualification');
    }

    public function vehicles()
    {
        return $this->belongsToMany('\App\Model\Tactics\Vehicle');
    }

    public function has_vehicle($veh_id)
    {
        return (DB::table('user_vehicle')
                    ->where('user_id', $this->id)
                    ->where('vehicle_id', $veh_id)
                    ->count() > 0);
    }

    public function tactical_qualification()
    {
        return $this->belongsTo('\App\Model\Tactics\TacticalQualification');
    }
}
