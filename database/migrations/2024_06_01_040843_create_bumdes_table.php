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
        Schema::create('bumdes', function (Blueprint $table) {
            $table->id('idBumdes');
            $table->integer('idUser');
            $table->string('name');
            $table->text('desc');
            $table->string('logo')->nullable();
            $table->string('lokasi');
            $table->string('maps');
            $table->string('images');
            $table->string('idJenisUsaha');
            $table->string('phoneNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bumdes');
    }
};
