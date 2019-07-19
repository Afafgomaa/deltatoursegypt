<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiverExcursionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('river_excursions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('main_image');
            $table->integer('price');
            $table->string('name');
            $table->date('start_day')->nullable();
            $table->string('days_1')->nullable();
            $table->string('days_2')->nullable();
            $table->string('small_brief')->nullable();
            $table->text('brief');
            $table->text('image_gallery');
            $table->text('include')->nullable();
            $table->text('exclude')->nullable();
            $table->text('itinerary_label_1')->nullable();
            $table->text('itinerary_heading_1')->nullable();
            $table->text('itinerary_body_1')->nullable();
            $table->text('itinerary_label_2')->nullable();
            $table->text('itinerary_heading_2')->nullable();
            $table->text('itinerary_body_2')->nullable();
            $table->text('pricing')->nullable();
            $table->text('facilitis')->nullable();
            $table->text('general')->nullable();
            $table->integer('pages_id');
            $table->integer('small_group')->default(0);
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
        Schema::dropIfExists('river_excursions');
    }
}
