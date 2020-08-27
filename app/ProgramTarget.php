<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramTarget extends Model
{

    /**
     * @return HasMany
     * @author hanan
     */
    public function strategicTarget()
    {
        return $this->belongsTo(StrategicTarget::class, 'strategic_target_id');
    }

    /**
     * @return HasMany
     * @author hanan
     * @method activityTargets
     */
    public function activityTargets()
    {
        return $this->hasMany(ActivityTarget::class , 'program_target_id');
    }
}
