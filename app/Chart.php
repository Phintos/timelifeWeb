<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $fillable = ['location', 'gender', 'mood', 'type'];
}
