<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'client',
        'title',
        'start_date',
        'deadline',
        'description',
        'tag',
        'category',
        'assigned',
        'status',
        'billing',
        'billing_type',
        'estimated__hours',
        'estimated_costs',
        'quality_level',
        'total_images',
        'total_pages',
        'comments',
    ];
}
