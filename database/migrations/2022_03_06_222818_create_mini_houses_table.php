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
        Schema::create('mini_houses', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('number_of_rooms');
            $table->string('number_of_bath_rooms');
            $table->boolean('has_internet');
            $table->boolean('has_parking');
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
        Schema::dropIfExists('mini_houses');
    }
};
