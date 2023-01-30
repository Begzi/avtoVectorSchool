<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('government')->default('No');
            $table->string('leader_government')->default('No');
            $table->string('location_government')->default('No');
            $table->string('site_government')->nullable();
            $table->string('email_government')->nullable();
            $table->string('info_about_government')->nullable();
            $table->string('info_about_government_pdf')->nullable();
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
        Schema::dropIfExists('structs');
    }
}
