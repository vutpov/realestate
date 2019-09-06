<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstallSchedule extends Model
{
    protected $primaryKey = 'scheduleInstallId';
    public function contract()
    {
        return $this->belongsTo('App\Contract', 'contractId', 'contractId');
    }
}
