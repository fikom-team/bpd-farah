<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityTarget extends Model
{
    /**
     * 
     * @return BelongsTo
     */
    public function programTarget(): BelongsTo
    {
        return $this->belongsTo(ProgramTarget::class, 'program_target_id');
    }
}
