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
            $table->string('company_name',25);
            $table->string('departure_station',30);
            $table->string('arrival_station',30);
            $table->string('departure_time',5);
            $table->string('arrival_time',5);
            $table->string('train_code',7);
            $table->tinyInteger('couches_number')->nullable();
            $table->tinyInteger('is_punctual')->default(1);
            $table->tinyInteger('is_suppressed');
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
