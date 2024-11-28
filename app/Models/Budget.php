<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 
                            'email', 
                            'phone', 
                            'service_type', 
                            'area', 
                            'material_description',
                            'budget', 
                            'additional_notes', 
                            'status', 
                        ];
                        
}
