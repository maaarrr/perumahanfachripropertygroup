<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // D'Fanisa Residence
            $table->string('location'); // Jl. Karya - Pal IX
            $table->string('type'); // TIPE 50 CLUSTER
            $table->string('total_units'); // TOTAL 147 UNIT
            $table->string('whatsapp_number'); // Nomor WA khusus property
            $table->text('whatsapp_message')->nullable(); // Pesan default WA
            $table->integer('order')->default(0); // Urutan tampil
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};