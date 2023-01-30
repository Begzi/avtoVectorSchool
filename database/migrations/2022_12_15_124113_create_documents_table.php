<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ustavDocLink')->nullable();
            $table->string('licenseDocLink')->nullable();
            $table->string('accreditationDocLink')->nullable();
            $table->string('finPlanDocLink')->nullable();
            $table->string('localActStud')->nullable();
            $table->string('localActOrder')->nullable();
            $table->string('localActCollec')->nullable();
            $table->string('reportEduDocLink')->nullable();
            $table->string('paidEduDocLink')->nullable();
            $table->string('paidEduDogDocLink')->nullable();
            $table->string('paidEduStoimDocLink')->nullable();
            $table->string('prescriptionDocLink')->nullable();
            $table->string('eduProgBLink')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
