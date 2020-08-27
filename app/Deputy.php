<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deputy extends Model
{
    public function programTarget()
    {
        return $this->belongsTo(ProgramTarget::class, 'program_target_id');
    }
}
