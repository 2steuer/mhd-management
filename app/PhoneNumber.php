<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $fillable = [
        'user_id',
        'description',
        'number'
    ];

    public function update_normalized_number()
    {
        $this->normalized_number = \Propaganistas\LaravelPhone\PhoneNumber::make($this->number, env('PHONE_DEFAULT_COUNTRY', 'DE'))
            ->formatE164();
    }

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
