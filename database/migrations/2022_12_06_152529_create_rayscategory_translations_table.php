<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRayscategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rayscategory_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rayscategory_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->unique(['rayscategory_id', 'locale']);
            $table->foreign('rayscategory_id')->references('id')->on('rayscategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rayscategory_translations');
    }
}
