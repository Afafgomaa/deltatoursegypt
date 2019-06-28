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
            $table->integer('kind');
            $table->integer('days');
            $table->integer('nights');
            $table->text('brief');
            $table->string('place')->nullable();
            $table->text('image_gallery');
            $table->text('overview')->nullable();
            $table->string('itinerary_heading');
            $table->text('itinerary');
            $table->text('pricing')->nullable();
            $table->text('price_children')->nullable();
            $table->integer('page_id');
            $table->string('slug');
            $table->text('related_programs_id')->nullable();
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
