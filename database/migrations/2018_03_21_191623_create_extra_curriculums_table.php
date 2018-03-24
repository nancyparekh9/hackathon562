<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_curriculums', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        
            $table->string('Index_No', 20);
            $table->string('Gr_No', 10);
            $table->bigInteger('Aadhar_No');
         
            $table->string('Certi_Description', 100);
            $table->integer('Standard');
            $table->integer('Rank');
            $table->integer('Category');
            $table->string('Type', 20);
            $table->string('Link', 200);
            $table->increments('id');
            // $table->foreign('Index_No')
            //       ->references('Index_No')->on('school_representatives')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');
            // $table->foreign('Gr_No')
            //       ->references('Gr_No')->on('students')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');
            $table->foreign('Aadhar_No')
                  ->references('Aadhar_No')->on('students')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            //$table->foreign('Rank')
            //       ->references('Rank')->on('credit_mappings')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');   
            //  $table->foreign('Category')
            //       ->references('Category')->on('credit_mappings')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');   
        //      $table->foreign('Type')
        //           ->references('Type')->on('credit_mappings')
        //           ->onDelete('cascade')
        //           ->onUpdate('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_curriculums');
    }
}
