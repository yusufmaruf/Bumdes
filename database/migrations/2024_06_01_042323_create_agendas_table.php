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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id('idAgenda');
            $table->string('name');
            $table->string('slug');
            $table->string('photo');
            $table->text('desc');
            $table->string('location');
            $table->date('tanggal');
            $table->time('waktuMulai');
            $table->time('waktuSelesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
