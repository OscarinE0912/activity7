<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DidacticMaterial extends Model
{
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
