<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('sgc')->create('tb_estoque_produtos', function (Blueprint $table) {
            $table->id('sr_id');
            $table->unsignedBigInteger('fk_produto');
            $table->foreign('fk_produto')->references('sr_id')->on('tb_produtos');
            $table->integer('it_quantidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('sgc')->dropIfExists('tb_estoque_produtos');
    }
};
