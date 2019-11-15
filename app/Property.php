<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\PropertyType;


class Property extends Model
{
    protected $primaryKey = 'propertyId';

    public function propAttribute(){

      

      return $this->belongsTo('App\propAttribute', 'propAttribId', 'propAttributeid');
    }

    public function propType(){
      return $this->belongsTo('App\PropertyType', 'propertyTypeId', 'propertyTypeId');
    
    
    }
}
