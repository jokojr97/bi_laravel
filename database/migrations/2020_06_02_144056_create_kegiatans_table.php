<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('feature_image')->nullable();
            $table->bigInteger('author');
            $table->text('keywords');
            $table->text('exercipt');
            $table->string('status');
            $table->string('slug');
            $table->string('language');
            $table->string('lokasi');
            $table->string('lat');
            $table->string('long');
            $table->date('published_at')->nullable();
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
        Schema::dropIfExists('kegiatans');
    }
}
