<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\InstallSchedule;
use App\InvoiceDetail;
use Illuminate\Support\Facades\DB;

class Invoice extends Model
{
    //

    protected $primaryKey = 'invoiceId';

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customerId', 'customerId');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staffs', 'staffId', 'staffId');
    }

    


}
