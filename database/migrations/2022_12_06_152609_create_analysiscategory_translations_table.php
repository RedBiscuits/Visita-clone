<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalysiscategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysiscategory_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('analysiscategory_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->unique(['analysiscategory_id', 'locale']);
            $table->foreign('analysiscategory_id')->references('id')->on('analysiscategories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analysiscategory_translations');
    }
}
