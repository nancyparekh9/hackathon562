<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->string('Index_No', 20);
            $table->string('Gr_No', 10);
            $table->bigInteger('Aadhar_No');
            $table->string('Student_Name', 50);
            $table->string('Father_Name', 20);
            $table->string('Mother_Name', 20);
            $table->bigInteger('Contact_No');
            $table->date('DOB');
            $table->string('Email_Id', 20);
            $table->boolean('Gender');
            $table->integer('Standard');
            $table->double('Percentage', 3,2);
            $table->bigInteger('Ext_Academics');
            $table->bigInteger('Ext_Sports');   
            $table->bigInteger('Ext_Cultural');
            $table->primary(['Index_No','Gr_No','Standard']);
            $table->unique('Aadhar_No','Standard');
            $table->index('Percentage');
            $table->index('Ext_Academics');
            $table->index('Ext_Sports');

            $table->index('Ext_Cultural');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
