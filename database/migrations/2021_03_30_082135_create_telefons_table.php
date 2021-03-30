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
            $table->string('model');
            $table->string('cijena');
            $table->string('opis');
            $table->bigInteger('slika_id')->unsigned();
            $table->foreign('slika_id')->references('id')->on('photos');
            $table->date('created_at');
            $table->date('updated_at');
            $table->bigInteger('konfiguracije')->unsigned();
            $table->foreign('konfiguracije')->references('id')->on('configurations');
            $table->string('prodavac');
            $table->string('kontakt');
            $table->string('sifra');
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