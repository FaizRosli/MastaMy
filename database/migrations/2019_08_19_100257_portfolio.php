<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Portfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('Portfolio', function (Blueprint $table) {
                $table->bigIncrements('id')->unique();
                $table->string('user_id')->nullable();
                $table->string('portfolio_image')->nullable();

                $table->rememberToken();
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
    }
}
