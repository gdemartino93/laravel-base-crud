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
        Schema::create('saints', function (Blueprint $table) {
            $table->id();

            $table->string('nome',50);
            $table -> string('luogoDiNascita',50);
            $table -> date('dataDiNascita');
            $table -> mediumInteger('numeroDiMiracoli') -> default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saints');
    }
};
