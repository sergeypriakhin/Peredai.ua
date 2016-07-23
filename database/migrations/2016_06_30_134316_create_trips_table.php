<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->primary('id');
            $table->integer('user_id');
            $table->string('location_from');
            $table->string('location_where');
            $table->string('date_with', 50);
            $table->string('date_to', 50);
            $table->integer('transport_id');
            $table->string('comments', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trips');
    }
}
