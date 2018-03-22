<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('Index_No', 20);
            $table->string('Gr_No', 10);
            $table->bigInteger('Aadhar_No');
            $table->string('Student_Name', 50);
            $table->string('Father_Name', 20);
            $table->string('Mother_Name', 20);
            $table->bigInteger('Contact_No');
            $table->string('Email_Id', 20);
            $table->date('DOB');
            $table->boolean('Gender');
            $table->integer('Standard');
            $table->double('Percentage', 3,2);
            $table->double('C_Percentage', 3,2);
            $table->bigInteger('Ext_Academics');    
            $table->bigInteger('C_Ext_Academics');    
            $table->bigInteger('Ext_Sports');    
            $table->bigInteger('C_Ext_Sports');    
            $table->bigInteger('Ext_Cultural');
            $table->bigInteger('C_Ext_Cultural');
            $table->boolean('Status');

            $table->primary(['Index_No','Gr_No']);
            $table->unique(['Aadhar_No']);
            $table->index('Gr_No');
            $table->index('Percentage');
            $table->index('Ext_Academics');
            $table->index('Ext_Sports');

            $table->index('Ext_Cultural');
            $table->foreign('Index_No')
                  ->references('Index_No')->on('school_representatives')
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
        Schema::dropIfExists('students');
    }
}
