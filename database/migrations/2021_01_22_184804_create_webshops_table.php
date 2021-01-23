<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webshops', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("idJelo");
            $table->integer("idUser");
            $table->integer("quantity")->nullable();
            $table->string("adresa");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webshops');
    }
}
