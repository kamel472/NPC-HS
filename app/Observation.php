<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = ['title', 'desc' , 'source' , 'observer' , 
    'recommended_corrective_action' , 'priority' , 
    'responsible_party' , 'corrective_action_taken'  , 'corrective_action_date' , 'status' , 'photo'];
}
