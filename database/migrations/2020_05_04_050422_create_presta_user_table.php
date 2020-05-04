<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presta_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('prestation_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('prestation_id')->references('id')->on('prestations');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('presta_user');
    }
}
