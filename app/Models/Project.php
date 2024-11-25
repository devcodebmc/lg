<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'location', 'manager',
        'type', 'delivery_date', 'cover_image', 'cover_video',
        'finishes', 'proceedings'
    ];

    protected $casts = [
        'finishes' => 'array',
        'proceedings' => 'array',
    ];

    public function secondaryImages()
    {
        return $this->hasMany(SecondaryImage::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }
}
