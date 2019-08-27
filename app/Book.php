<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
<<<<<<< HEAD
    protected $primaryKey = 'bookId';

    public function customer()
    {
        return $this->belongsTo('App\Customer','customerId','customerId');
    }

    public function agency()
    {
        return $this->belongsTo('App\Agency','agencyId','agencyId');
    }

    public function detail()
    {
        return $this->hasMany('App\BookDetail','bookId','bookId');
    }
=======
    protected $fillable = ['created_at', 'updated_at'];
>>>>>>> 516581d830f2a8e2c844470262cd9beeaf491e4c
}
