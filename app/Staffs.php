<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $fillable = ['name', 'gender', 'dob', 'address', 'phone', 'email', 'profile', 'positionId'];

    public function position()
    {
        return $this->hasOne('App\Position', 'positionId', 'positionId');
    }
}
