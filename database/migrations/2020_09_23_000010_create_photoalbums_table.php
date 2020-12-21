<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoalbumsTable extends Migration
{
    public function up()
    {
        Schema::create('photoalbums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phs_title');
            $table->timestamps();
        });
    }
}
