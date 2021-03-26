<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mark_id')->unsigned();
            $table->foreign('mark_id')->references('id')->on('marks');
            $table->string('cijena');
            $table->string('opis');
            $table->string('slika1');
            $table->string('slika2');
            $table->string('slika3');
            $table->date('created_at');
            $table->date('updated_at');
            $table->string('konfiguracije');
            $table->string('prodavac');
            $table->string('kontakt');
            $table->boolean('javno')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefons');
    }
}
