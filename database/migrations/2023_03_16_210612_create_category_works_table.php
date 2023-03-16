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
        Schema::create('category_works', function (Blueprint $table) {
            $table->integer("category_id")->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer("work_id")->unsigned();
            $table->foreign("work_id")->references('id')->on("works");
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
        Schema::dropIfExists('category_works');
    }
};
