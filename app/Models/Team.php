<?php

namespace App\Models;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'image',
        'address',
        'gender',
        'jobTitle',
        'sallary',
        'sallaryTerm',
        'dateofHire',
        'email',
        'password',
        'role'
    ];
}
