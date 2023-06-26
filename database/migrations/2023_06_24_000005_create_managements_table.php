<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementsTable extends Migration
{
    public function up()
    {
        Schema::create('managements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->boolean('sick')->default(0)->nullable();
            $table->boolean('shabby')->default(0)->nullable();
            $table->boolean('whip')->default(0)->nullable();
            $table->boolean('smash')->default(0)->nullable();
            $table->boolean('hernia')->default(0)->nullable();
            $table->boolean('lung')->default(0)->nullable();
            $table->boolean('tag')->default(0)->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }
}
