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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('complaint')->nullable();
            $table->string('id_medicine')->nullable();
            $table->string('dose')->nullable();
            $table->string('price')->nullable();
            $table->string('concoction_medicine')->nullable();
            $table->string('price_concoction_medicine')->nullable();
            $table->string('total_price')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('medical_records');
    }
};
