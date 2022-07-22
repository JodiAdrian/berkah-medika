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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('identity_number')->nullable();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('born')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('contact')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
