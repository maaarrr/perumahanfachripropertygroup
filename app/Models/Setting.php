<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_path',
        'company_description',
        'office_address',
        'phone_number',
        'email',
        'whatsapp_float',
        'testimonial_youtube_url',
        'testimonial_title',
        'hero_title',
        'hero_subtitle',
        'hero_tagline',
    ];

    // Helper method untuk mendapatkan setting
    public static function get()
    {
        return self::first() ?? new self();
    }
}