<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->unsignedInteger('nw_phs_id')->nullable();
            $table->foreign('nw_phs_id', 'nw_phs_fk_1941354')->references('id')->on('photoalbums');
        });
    }
}
