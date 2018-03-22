<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_mappings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Tier');
            $table->string('Type', 20);
            $table->integer('Rank');
            $table->integer('Category');
            $table->integer('Credit_Points');
            $table->index(['Type','Rank','Category']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_mappings');
    }
}
