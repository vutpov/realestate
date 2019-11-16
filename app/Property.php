<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\PropertyType;


class Property extends Model
{
    protected $primaryKey = 'propertyId';

    public function propAttribute(){
      return $this->belongsTo('App\propAttribute', 'propAttributeId', 'propAttributeid');
    }

    public function propType(){
      return $this->belongsTo('App\PropertyType', 'propertyTypeId', 'propertyTypeId')->select(array('propertyType')); 
    }

    public function unitMesurement(){
      return $this->belongsTo('App\UM', 'umId', 'umId')->select(array('um')); 
    }
}
