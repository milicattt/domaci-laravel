<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patike', function (Blueprint $table) {
            $table->id();
            $table->text('ime');
            $table->string('url_slike')->unique(); 
            $table->text('opis')->nullable();   
            $table->integer('cena'); 
            $table->foreignId('brend_id');
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
        Schema::dropIfExists('patike');
    }
};
