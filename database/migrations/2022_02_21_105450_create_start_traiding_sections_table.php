<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartTraidingSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('start_traiding_sections', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('code');
            $table->string('name');
            $table->string('status');
            $table->float('price');
            $table->float('evolution');
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
        Schema::dropIfExists('start_traiding_sections');
    }
}
