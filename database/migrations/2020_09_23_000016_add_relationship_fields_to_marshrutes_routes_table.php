<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMarshrutesRoutesTable extends Migration
{
    public function up()
    {
        Schema::table('marshrutes_routes', function (Blueprint $table) {
            $table->unsignedInteger('marshrutesroutes_floor_id')->nullable();
            $table->foreign('marshrutesroutes_floor_id', 'marshrutesroutes_floor_fk_2249193')->references('id')->on('marshrutes_floors');
            $table->unsignedInteger('marshrutesroutes_floorsecond_id')->nullable();
            $table->foreign('marshrutesroutes_floorsecond_id', 'marshrutesroutes_floorsecond_fk_2256463')->references('id')->on('marshrutes_floors');
        });
    }
}
