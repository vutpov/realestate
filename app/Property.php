<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\PropertyType;


class Property extends Model
{
    protected $primaryKey = 'propertyId';

    public function propAttribute(){
      return $this->hasOne('App/propAttribute');
    }

    public function propType(){
      return $this->hasOne('App/PropertyType', 'propertyTypeId', 'propertyTypeId');
    }
}
