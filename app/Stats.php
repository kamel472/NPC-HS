<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $fillable = ['training' ,'sumTraining', 'inspections' ,'sumInspections', 'observations' ,'sumObservations', 'meetings' ,'sumMeetings', 'drills' ,'sumDrills',

    'fatalities' ,'sumFatalities','lostTime' ,'sumLostTime','damage' ,'sumDamage','fire','sumFire','nearMiss' ,'sumNearMiss', 'firstAid' ,'sumFirstAid', 'date'];
}
