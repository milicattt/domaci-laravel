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
        Schema::table('brendovi', function (Blueprint $table) {
            $table->renameColumn('ime', 'imeBrenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brendovi', function (Blueprint $table) {
            $table->renameColumn('imeBrenda', 'ime');
        });
    }
};
