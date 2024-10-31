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
        Schema::connection('sgc')->create('tb_usuarios', function (Blueprint $table) {
            $table->id('sr_id');
            $table->string('vc_nome', 255);
            $table->string('vc_email',255);
            $table->string('vc_senha',255);
            $table->string('vc_token');
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_usuarios');
    }
};
