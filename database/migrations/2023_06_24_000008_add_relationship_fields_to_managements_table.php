<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToManagementsTable extends Migration
{
    public function up()
    {
        Schema::table('managements', function (Blueprint $table) {
            $table->unsignedBigInteger('key_id')->nullable();
            $table->foreign('key_id', 'key_fk_8665084')->references('id')->on('pigs');
        });
    }
}
