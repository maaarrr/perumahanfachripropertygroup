<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'type',
        'total_units',
        'whatsapp_number',
        'whatsapp_message',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(PropertyImage::class)->orderBy('order');
    }

    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class)->orderBy('order');
    }

    public function strategicLocations(): HasMany
    {
        return $this->hasMany(StrategicLocation::class)->orderBy('order');
    }

    // Scope untuk property aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order');
    }
}