<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'empoloyeeID',
        'leaveType',
        'startDate',
        'finishDate',
        'status',
        'attatchment',
        'halfDay',
        'reason'
    ];
    public function team(){
        return $this->belongsTo(Team::class, 'empoloyeeID');
    }
    public function leavetype(){
        return $this->belongsTo(LeaveType::class, 'leaveType');
    }
}
