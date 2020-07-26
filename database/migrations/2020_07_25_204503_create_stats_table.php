<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->integer('training');
            $table->integer('sumTraining');
            $table->integer('inspections');
            $table->integer('sumInspections');
            $table->integer('observations');
            $table->integer('sumObservations');
            $table->integer('meetings');
            $table->integer('sumMeetings');
            $table->integer('drills');
            $table->integer('sumDrills');
            $table->integer('fatalities');
            $table->integer('sumFatalities');
            $table->integer('lostTime');
            $table->integer('sumLostTime');
            $table->integer('damage');
            $table->integer('sumDamage');
            $table->integer('fire');
            $table->integer('sumFire');
            $table->integer('nearMiss');
            $table->integer('sumNearMiss');
            $table->integer('firstAid');
            $table->integer('sumFirstAid');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
}
