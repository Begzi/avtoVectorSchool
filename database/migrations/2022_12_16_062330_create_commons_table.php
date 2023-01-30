<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commons', function (Blueprint $table) {
            $table->increments('id');
            $table->date('created_school');
            $table->string('fullname')->default('No');
            $table->string('shortname')->default('No');
            $table->string('founder')->default('No');
            $table->string('found_members')->nullable();
            $table->string('address')->default('No');
            $table->string('address_branch')->nullable();
            $table->string('work_time_day')->default('No');
            $table->string('phone')->default('No');
            $table->string('email')->default('No');
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
        Schema::dropIfExists('commons');
    }
}
