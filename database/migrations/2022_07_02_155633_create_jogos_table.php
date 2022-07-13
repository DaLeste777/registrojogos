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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',700);
            $table->string('categoria',700);
            $table->year('ano_criacao');
            $table->double('valor',8,2);
            //$table->date('created_at', strtotime("d/m/Y h:i:s"));
            $table->date('d-m-Y', strtotime('created_at'));
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
        Schema::dropIfExists('jogos');
    }

    public function datah()
    {
        Schema::table('events', function (Blueprint $table){
            $table->dropColumn('date');
        });
    }
};