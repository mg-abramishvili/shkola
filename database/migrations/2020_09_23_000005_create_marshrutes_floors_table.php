<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarshrutesFloorsTable extends Migration
{
    public function up()
    {
        Schema::create('marshrutes_floors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marshrutesfloor_title');
            $table->timestamps();
        });
    }
}
