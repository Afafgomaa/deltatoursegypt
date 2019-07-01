<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('main_image');
            $table->integer('price');
            $table->string('name');
            $table->integer('kind')->nullable();
            $table->integer('days')->nullable();
            $table->integer('nights')->nullable();
            $table->text('brief');
            $table->string('place');
            $table->text('image_gallery');
            $table->text('overview')->nullable();
            $table->text('itinerary_heading')->nullable();
            $table->text('itinerary')->nullable();
            $table->text('pricing')->nullable();
            $table->text('price_children')->nullable();
            $table->integer('pages_id');
            $table->string('slug');
            $table->softDeletes();
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
        Schema::dropIfExists('programs');
    }
}
