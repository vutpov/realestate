<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $primaryKey = 'contractId';

    public function customer()
    {
        return $this->belongsTo('App\Customer','customerId','customerId');
    }

    public function agency()
    {
        return $this->belongsTo('App\Agency','agencyId','agencyId');
    }
}
