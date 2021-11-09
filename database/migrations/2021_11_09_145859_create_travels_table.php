<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string("code_travel", 20)->unique();
            $table->string("destination", 60);
            $table->string("means_of_transport", 20);
            $table->date("departure_date");
            $table->date("returne_date");
            $table->tinyInteger("number_passenger");
            $table->string("guide", 20);
            $table->float("price", 7, 2);
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
        Schema::dropIfExists('travels');
    }
}
