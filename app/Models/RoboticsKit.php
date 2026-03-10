<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoboticsKit extends Model
{
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
