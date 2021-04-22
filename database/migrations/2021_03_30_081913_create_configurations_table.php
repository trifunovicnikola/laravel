<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('procesor')->nullable();
            $table->string('ram')->nullable();
            $table->string('baterija')->nullable();
            $table->string('kamera_zadnja')->nullable();
            $table->string('kamera_prednja')->nullable();
            $table->string('ekran')->nullable();
            $table->string('memorija')->nullable();
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
        Schema::dropIfExists('configurations');
    }
}
