<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user admin default
        User::firstOrCreate(
            ['email' => 'admin@fachriproperty.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        // Buat setting default
        Setting::firstOrCreate([], [
            'company_description' => 'Fachri Property Group adalah pengembang properti terpercaya yang menyediakan hunian berkualitas di lokasi strategis untuk keluarga Indonesia.',
            'office_address' => "Jl. Ampera No.22, RT.003/RW.015\nKel. Sei Raya, Kec. Pontianak Kota\nKalimantan Barat 78113",
            'phone_number' => '0561-817-7746',
            'email' => 'fachri@gmail.com',
            'whatsapp_float' => '6285750777700',
            'testimonial_youtube_url' => 'https://www.youtube.com/embed/fvQKuJYsuXs?si=ZMxSFQs_scQZaZi2',
            'testimonial_title' => 'TESTIMONI MEREKA',
            'hero_title' => 'KANTOR PEMASARAN',
            'hero_subtitle' => 'PERUMAHAN',
            'hero_tagline' => '"Beli Rumah Harus Fachri Property Group"',
        ]);
    }
}