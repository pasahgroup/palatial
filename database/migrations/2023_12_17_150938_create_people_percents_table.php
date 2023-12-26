<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplePercentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_percents', function (Blueprint $table) {
             $table->bigIncrements('id');                     
             $table->string('percent_name')->nullable();
              $table->decimal('percent')->nullable();
              $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('people_percents');
    }
}
