<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Pages;
class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->string('slug');
            $table->text('breif');
            $table->string('image')->nullable();
            $table->string('bg_image')->nullable();
            $table->integer('overlay')->nullable();
            $table->integer('parent_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        $firstmain  = Pages::create([
            'id' => 1,
            'name' => 'Egypt Tour Packages',
            'title' => 'Egypt Tour Packages Tilte',
            'slug' => 'Egypt-Tour-Packages',
            'breif' => 'Experience all that Egypt has to offer with an exclusive private group holiday. We offer tour packages to suit any taste, mixing classic tours of Ancient Egypt with city tours, diving holidays, and adventures in the desert..',
            'parent_id' => 0
            
        ]);
        Pages::create([
            'id' => 2,
            'name' => 'Egypt Packages',
            'title' => 'Egypt Packages title',
            'slug' => 'Egypt-Packages-title',
            'breif' => 'Experience all that Egypt has to offer with an exclusive private group holiday. We offer tour packages to suit any taste, mixing classic tours of Ancient Egypt with city tours, diving holidays, and adventures in the desert..',
            'parent_id' => $firstmain->id
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
        
    }
}
