<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataAssets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manufacture_id')->index('manufacture_id')->nullable();
            $table->string('description');
            $table->date('date_purchased');
            $table->timestamps();
        });

        Schema::table('data_assets', function (Blueprint $table) {
            $table->foreign('manufacture_id')->references('id')->on('definition_manufacturers')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_assets', function (Blueprint $table) {
            $table->dropForeign(['manufacture_id']);
        });
        Schema::dropIfExists('data_assets');
    }
}
