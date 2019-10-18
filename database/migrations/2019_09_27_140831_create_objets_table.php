<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('imei');
            $table->string('model');
            $table->string('vin');
            $table->string('plateNumber');
            $table->string('device');
            $table->string('simNumber');
            $table->integer('idManager');
            $table->boolean('active');
            $table->date('expireOn');
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
        Schema::dropIfExists('objets');
    }
}
