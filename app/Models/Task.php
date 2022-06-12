<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function team(){
        return $this->belongsToMany(Team::class);
    }
}
