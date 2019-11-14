<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    // Each class has many subjects
    public function courses() {
        return $this->hasMany(\App\Course::class);
    }

    //  Each class has one class master/mistress
    public function teachers() {
        return $this->hasMany(\App\Staff::class);
    }




}
