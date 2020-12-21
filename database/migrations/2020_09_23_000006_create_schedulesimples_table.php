<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesimplesTable extends Migration
{
    public function up()
    {
        Schema::create('schedulesimples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('schsm_title');
            $table->timestamps();
        });
    }
}
