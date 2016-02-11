<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patch_images', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('patch_id')->unsigned()->index();
            $table->string('path', 512);
            $table->unsignedInteger('width');
            $table->unsignedInteger('height');
            $table->unsignedInteger('filesize');
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
        Schema::drop('patch_images');
    }
}
