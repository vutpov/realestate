<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['customerId'];

    protected $primaryKey = 'customerId';
}
