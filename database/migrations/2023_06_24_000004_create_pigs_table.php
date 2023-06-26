<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePigsTable extends Migration
{
    public function up()
    {
        Schema::create('pigs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('pig_pro_doc_no');
            $table->string('license');
            $table->string('origin');
            $table->integer('key');
            $table->string('ref_doc_no');
            $table->string('week_date');
            $table->string('species');
            $table->string('sex');
            $table->string('type');
            $table->string('weigh');
            $table->string('age');
            $table->string('ror_3_doc_no');
            $table->timestamps();
        });
    }
}
