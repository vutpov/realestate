<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'bookId';

    public function customer()
    {
        return $this->belongsTo('App\Customer','customerId','customerId');
    }

    public function agency()
    {
        return $this->belongsTo('App\Agency','agencyId','agencyId');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staffs','staffId','staffId');
    }

    public function detail()
    {
        return $this->hasMany('App\BookDetail','bookId','bookId');
    }




    public function contract(){
        return $this->hasOne('App\Contract','bookId','bookId');
    }

    protected $fillable = ['created_at', 'updated_at'];

}
