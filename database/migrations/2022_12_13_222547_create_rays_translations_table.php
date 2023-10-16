<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaysTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rays_translations', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('locale')->index();
            $table->unsignedBigInteger('rays_id');
            $table->foreign('rays_id')->references('id')->on('rays')->onDelete('cascade');
            $table->unique(['rays_id', 'locale']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rays_translations');
    }
}
