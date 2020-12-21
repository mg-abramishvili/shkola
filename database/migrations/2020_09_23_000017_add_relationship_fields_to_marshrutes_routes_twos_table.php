<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMarshrutesRoutesTwosTable extends Migration
{
    public function up()
    {
        Schema::table('marshrutes_routes_twos', function (Blueprint $table) {
            $table->unsignedInteger('marshrutesroutes_floor_id')->nullable();
            $table->foreign('marshrutesroutes_floor_id', 'marshrutesroutes_floor_fk_2252937')->references('id')->on('marshrutes_floors');
            $table->unsignedInteger('marshrutesroutes_floorsecond_id')->nullable();
            $table->foreign('marshrutesroutes_floorsecond_id', 'marshrutesroutes_floorsecond_fk_2256481')->references('id')->on('marshrutes_floors');
        });
    }
}
