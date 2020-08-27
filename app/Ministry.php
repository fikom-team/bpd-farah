<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ministry extends Model
{
    public function strategicTarget() : BelongsTo
    {
        return $this->belongsTo(StrategicTarget::class , 'strategic_target_id');
    }
}
