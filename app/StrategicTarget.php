<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StrategicTarget extends Model
{
    /**
     * Sasaran Target Dapat memiliki Banyak Content Kementrian
     * 
     * @return HasMany
     */
    public function ministrys() : HasMany
    {
        return $this->hasMany(Ministry::class , 'strategic_target_id');
    }
}
