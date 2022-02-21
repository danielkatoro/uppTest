<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmazingFeaturesSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amazing_features_sections', function (Blueprint $table) {
            $table->id();
            $table->string('titre1');
            $table->string('text1');
            $table->string('image1');
            $table->string('titre2');
            $table->string('text2');
            $table->string('image2');
            $table->string('titre3');
            $table->string('text3');
            $table->string('image3');
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
        Schema::dropIfExists('amazing_features_sections');
    }
}
