<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('departure_station', 50);
            $table->dateTime('departure_time');
            $table->string('arrival_station', 50);
            $table->dateTime('arrival_time');
            $table->string('code_train', 10);
            $table->smallInteger('n_carriages');
            $table->tinyInteger('is_in_time')->unsigned()->default(1);
            $table->tinyInteger('deleted')->unsigned()->default(0);
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
        Schema::dropIfExists('trains');
    }
};
