<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramTarget extends Model
{

    public function strategicTarget()
    {
        return $this->belongsTo(StrategicTarget::class , 'strategic_target_id');
    }
}
