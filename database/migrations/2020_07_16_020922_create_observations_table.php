<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
        
            $table->id();
            $table->text('desc');
            $table->string('source');
            $table->string('observer')->nullable();
            $table->string('responsible_area');
            $table->string('responsible_correction')->nullable();
            $table->text('corrective_action_taken')->nullable();
            $table->date('corrective_action_date')->nullable();
            $table->string('status');
            $table->string('photo')->nullable();
            $table->boolean('showSafety');
            $table->boolean('showChairman');
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
        Schema::dropIfExists('observations');
    }
}
