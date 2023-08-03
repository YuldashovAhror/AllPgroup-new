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
        Schema::create('postavchiks', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->text('discription_uz');
            $table->text('discription_ru');
            $table->text('discription_en');
            $table->string('link');
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
        Schema::dropIfExists('postavchiks');
    }
};
