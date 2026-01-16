<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_path')->nullable();
            $table->text('company_description'); // Deskripsi perusahaan
            $table->text('office_address'); // Alamat kantor
            $table->string('phone_number'); // 0561-817-7746
            $table->string('email'); // fachri@gmail.com
            $table->string('whatsapp_float'); // Nomor WA float button
            $table->string('testimonial_youtube_url')->nullable(); // Link YouTube
            $table->string('testimonial_title')->default('TESTIMONI MEREKA');
            $table->string('hero_title')->default('KANTOR PEMASARAN');
            $table->string('hero_subtitle')->default('PERUMAHAN');
            $table->string('hero_tagline')->default('"Beli Rumah Harus Fachri Property Group"');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};