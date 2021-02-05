<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'birthdate'
    ];

    public function tasks() {
        return $this -> hasMany(Task::class);
    }
}
