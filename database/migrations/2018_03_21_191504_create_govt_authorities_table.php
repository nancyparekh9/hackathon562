<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovtAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('govt_authorities', function (Blueprint $table) {
            $table->string('G_Index', 20);
            $table->string('G_Name', 50);
            $table->string('G_Email', 20);
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->primary('G_Index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('govt_authorities');
    }
}
