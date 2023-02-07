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
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('surname', 255)->nullable();
            $table->string('mail', 255)->nullable();
            $table->integer('phone')->unsigned()->nullable();
            $table->string('subject', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('message', 255)->nullable();
            $table->boolean('status')->default(False);
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
        Schema::dropIfExists('contacts');
    }
};
