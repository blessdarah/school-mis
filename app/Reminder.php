<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    // Reminder belongs to only one staff (teacher)
    public function staff() {
        return $this->belongsTo(\App\Staff::class);
    }
}
