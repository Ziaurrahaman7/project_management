<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    protected $fillable=[
        'project_id',
        'client_id',	
        'department',	
        'priority',	
        'subject',
        'details',
        'fileUpload',
        'status',
        'comment'	
    ];
    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }
}
