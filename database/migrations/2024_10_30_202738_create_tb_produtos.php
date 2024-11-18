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
        Schema::connection('sgc')->create('tb_produtos', function (Blueprint $table) {
            $table->id('sr_id');
            $table->string('vc_nome',255)->nullable(false);
            $table->string('vc_descricao',255)->nullable(true);
            $table->float('fl_preco')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_produtos');
    }
};
