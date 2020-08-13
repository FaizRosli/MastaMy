<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resume extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('resume', function (blueprint $table){
            $table->bigIncrements('id')->unique();
            $table->string('user_id')->nullable();
            $table->string('course')->nullable();
            $table->string('year')->nullable();
            $table->string('uni')->nullable();
            $table->text('detail_education')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_company')->nullable();
            $table->string('date_start')->nullable();
            $table->string('date_end')->nullable();
            $table->text('job_description')->nullable();
            $table->string('type_skill')->nullable();
            $table->string('name_skill')->nullable();
            $table->string('percentage')->nullable();
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
        //
        Schema::dropIfExists('resume');
    }
}
