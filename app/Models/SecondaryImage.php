<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondaryImage extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'image_path', 'category'];

    protected $casts = [
        'finishes' => 'array',
        'proceedings' => 'array',
        'delivery_date' => 'datetime', // Agregado para convertir automáticamente a Carbon
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
