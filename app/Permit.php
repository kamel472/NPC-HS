<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $casts = ['type'=>'array'];
    protected $fillable = ['location' , 'desc' , 'type' , 'fire_fighting' , 'date'  ];
}
