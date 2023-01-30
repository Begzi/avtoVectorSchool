<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectsSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cabinet_count')->default(1);
            $table->integer('car_count')->default(1);
            $table->integer('table_count')->default(15);
            $table->integer('chair_count')->default(30);
            $table->integer('placat_count')->default(30);
            $table->integer('maneken_count')->default(1);
            $table->integer('pc_count')->default(6);
            $table->integer('processor_count')->default(1);
            $table->integer('screen_count')->default(1);
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
        Schema::dropIfExists('objects_schools');
    }
}
