<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrategicLocation extends Model
{
    protected $fillable = ['property_id', 'description', 'order'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}