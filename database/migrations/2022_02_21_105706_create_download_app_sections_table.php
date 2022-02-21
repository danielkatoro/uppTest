<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadAppSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('download_app_sections', function (Blueprint $table) {
            $table->id();
            $table->string('video');
            $table->string('titre1');
            $table->string('text1');
            $table->string('titre2');
            $table->string('text2');
            $table->string('titre3');
            $table->string('text3');
            $table->string('titre4');
            $table->string('text4');
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
        Schema::dropIfExists('download_app_sections');
    }
}
