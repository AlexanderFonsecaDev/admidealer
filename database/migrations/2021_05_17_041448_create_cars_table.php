<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->double('price')->default(0);
            $table->string('description')->default('N/A');
            $table->string('type')->nullable()->default('Undefined');
            $table->string('make')->nullable()->default('Undefined');
            $table->string('model')->nullable()->default('Undefined');
            $table->date('first_registration')->nullable();
            $table->string('mileage')->nullable()->default('Undefined');
            $table->string('fuel')->nullable()->default('Undefined');
            $table->string('engine_size')->nullable()->default('Undefined');
            $table->string('power')->nullable()->default('Undefined');
            $table->string('gearbox')->nullable()->default('Undefined');
            $table->string('number_seats')->nullable()->default('Undefined');
            $table->string('doors')->nullable()->default('Undefined');
            $table->string('color')->nullable()->default('Undefined');
            $table->string('extra')->nullable()->default('Undefined');
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
        Schema::dropIfExists('cars');
    }
}
