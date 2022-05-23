<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'department',
        'empoloyeeName',
        'leaveType',
        'startDate',
        'finishDate',
        'status',
    ];
}
