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
        Schema::connection('sgc')->create('tb_vendedores', function (Blueprint $table) {
            $table->id('sr_id');
            $table->string('vc_nome', 255);
            $table->unsignedBigInteger('fk_cliente');
            $table->foreign('fk_cliente')->references('sr_id')->on('tb_clientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_vendedores');
    }
};
