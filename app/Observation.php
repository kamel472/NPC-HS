<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = ['desc' , 'category' , 'source' , 'observer', 
    'responsible_area' , 'responsible_correction' , 'corrective_action_taken'  , 'corrective_action_date' , 'status' , 'photo' , 'confirmed'];
}
