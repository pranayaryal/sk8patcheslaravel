<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatchPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patch_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patch_id')->unsigned();

            $table->foreign('patch_id')
                ->references('id')
                ->on('patches')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('path');
            $table->string('thumbnail_path');
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
        Schema::drop('patch_photos');
    }
}
