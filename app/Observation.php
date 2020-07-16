<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = ['title', 'desc' , 'source' , 'observer' , 'recommended corrective action' , 'priority' , 
    'responsible party' , 'corrective action taken' , 'corrective action date' , 'status' , 'photo'];
}
