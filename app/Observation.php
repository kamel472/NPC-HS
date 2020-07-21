<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = ['desc' , 'category' , 'source' , 'observer' , 'priority' , 
    'responsible_party' , 'corrective_action_taken'  , 'corrective_action_date' , 'status' , 'photo'];
}
