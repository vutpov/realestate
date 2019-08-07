<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    
    protected $primaryKey = 'partnerId';

    public function partnerTypes(){
        return $this->belongsTo('App\PartnerType', 'partnerTypeId', 'partnerTypeId');
    }

}
