<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    // protected $fillable = ['agency','email','phone','address','tCom','paid','amountDue','agencyTypeId'];
    protected $guarded =['agencyId'];
}
