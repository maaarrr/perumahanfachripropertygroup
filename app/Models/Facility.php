<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'icon',
        'description',
        'order',
    ];

    // Relasi ke Property
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}