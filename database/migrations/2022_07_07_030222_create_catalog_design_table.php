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
        Schema::create('catalog_design', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalog_id')->nullable();
            $table->foreign('catalog_id')->references('id')->on('catalogs')->onUpdate('set null')->onDelete('set null');
            $table->unsignedBigInteger('design_id')->nullable();
            $table->foreign('design_id')->references('id')->on('designs')->onUpdate('set null')->onDelete('set null');
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
        Schema::dropIfExists('catalog_design');
    }
};
