<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_representatives', function (Blueprint $table) {
            $table->string('Index_No', 20);
            $table->string('R_Name', 30);
            $table->string('R_Email', 50);
            $table->string('R_Password', 20);
            $table->bigInteger('Phone_No');
            $table->primary('Index_No');
            $table->index(['R_Email','R_Password']);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('Index_No')
                  ->references('Index_No')->on('schools')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_representatives');
    }
}
