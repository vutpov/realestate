<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['companyname', 'email', 'tel', 'address', 'description', 'logo'];
}
