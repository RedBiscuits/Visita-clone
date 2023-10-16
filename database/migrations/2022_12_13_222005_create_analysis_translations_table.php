<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalysisTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysis_translations', function (Blueprint $table) {
            
            $table->id();
            $table->string('title');
            $table->string('locale')->index();
            $table->unsignedBigInteger('analysis_id');
            $table->foreign('analysis_id')->references('id')->on('analyses')->onDelete('cascade');
            $table->unique(['analysis_id', 'locale']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analysis_translations');
    }
}
