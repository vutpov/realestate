<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerType extends Model
{
    //

    protected $primaryKey = 'partnerTypeId';

    public function partners(){
        return $this->hasMany('App\Partner', 'partnerTypeId', 'partnerTypeId');
    }

}
