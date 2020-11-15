<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('slogan');
            $table->string('logo');
            $table->string('icon');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('whatsapps');
            $table->string('address');
            $table->string('email');
            $table->string('telpon');
            $table->string('description');
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
        Schema::dropIfExists('site_settings');
    }
}
