<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleInSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_in_searches', function (Blueprint $table) {
            $table->id();
            $table->string('fio_of_responsible')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('fio_of_missing')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->timestamp('day_of_missing')->nullable();
            $table->timestamp('place_of_missing')->nullable();
            $table->tinyInteger('type_of_place')->nullable();
            $table->string('missing_explanation')->nullable();
            $table->string('photo_of_missing')->nullable();
            $table->mediumText('extra_info')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('people_in_searches');
    }
}
