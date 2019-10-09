<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    // staff has many reminders
    public function reminders() {
        return $this->hasMany(\App\Reminder::class);
    }
}
