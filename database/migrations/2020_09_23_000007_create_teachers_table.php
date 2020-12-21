<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tch_name');
            $table->longText('tch_text')->nullable();
            $table->string('tch_spec');
            $table->string('tch_category')->nullable();
            $table->timestamps();
        });
    }
}
