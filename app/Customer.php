<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function country()
    {
        return $this->hasOne('App\Country', 'users_id');
    }

    public function company()
    {
        return $this->hasOne('App\Company', 'users_id');
    }
}
