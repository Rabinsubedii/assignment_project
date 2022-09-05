<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('headinlogo')->nullable(); 
            $table->string('footerlogo')->nullable(); 
            $table->string('aboutdescription')->nullable(); 
            $table->string('phonenumber')->nullable(); 
            $table->string('emailaddress')->nullable(); 
            $table->string('address')->nullable(); 
            $table->string('addressicon')->nullable(); 
            $table->string('phoneicon')->nullable(); 
            $table->string('footercopyright')->nullable(); 
            $table->string('facebookicon')->nullable(); 
            $table->string('youtubeicon')->nullable(); 
            $table->string('emailicon')->nullable(); 
            $table->string('instaicon')->nullable(); 
            $table->string('twittericon')->nullable(); 
            $table->string('facebookurl')->nullable(); 
            $table->string('youtubeurl')->nullable(); 
            $table->string('emailurl')->nullable(); 
            $table->string('insturl')->nullable(); 
            $table->text('mapurl')->nullable(); 
            $table->string('twitterurl')->nullable(); 
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
        Schema::dropIfExists('settings');
    }
}
