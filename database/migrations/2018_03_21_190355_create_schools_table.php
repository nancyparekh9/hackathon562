<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->string('Index_No', 20);
            $table->string('School_Name', 30);
            $table->string('School_Address', 50);
            $table->string('District', 20);
            $table->string('Email_Id', 20)->nullable();
            $table->bigInteger('Phone_No')->nullable();
            $table->boolean('School_Type')->nullable();
            $table->string('Password',100);
            $table->primary('Index_No');
            $table->index(['District','School_Type']);
            $table->index(['School_Type']);
            $table->index('School_Name');
            $table->index('Password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
