<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_description',
        'estimated_duration',
        'is_active',
    ];

    public function counters()
    {
        return $this->hasMany(Counter::class);
    }
}
