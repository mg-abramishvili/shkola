<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ev_title');
            $table->date('ev_date')->nullable();
            $table->longText('ev_text')->nullable();
            $table->string('ev_cat');
            $table->timestamps();
        });
    }
}
