<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tos', function (Blueprint $table) {
            $table->id();
            $table->integer('news_id')->nullable();
            $table->string('photo')->nullable();
            $table->text('discription_uz')->nullable();
            $table->text('discription_ru')->nullable();
            $table->text('discription_en')->nullable();
            $table->string('alt_uz')->nullable();
            $table->string('alt_ru')->nullable();
            $table->string('alt_en')->nullable();
            $table->string('title_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
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
        Schema::dropIfExists('news_tos');
    }
};
