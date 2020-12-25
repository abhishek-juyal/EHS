<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('input_id');
            $table->string('name', 128);
            $table->string('gender');
            $table->string('member');
            $table->string('dob');
            $table->integer('age');
            $table->string('address',128);
            $table->string('mobile_number');
            $table->string('marital_status');
            $table->integer('number_of_children');
            $table->string('height',128);
            $table->string('weight');
            $table->string('blood_pressure');
            $table->string('is_diabetic');
            $table->string('complain',128);
            $table->string('obs_medical_assistant',128);
            $table->string('suggestion',128);
            $table->string('schedule_vc');
            $table->string('suggestion_medical_officer',128);
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
        Schema::dropIfExists('information');
    }
}
