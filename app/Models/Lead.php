<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;
   protected $fillable = [
       'title',
       'email',
       'phone',
       'leadValue',
       'assigned',
       'note',
       'status',
       'source',
       'tag',
       'targetDate',
       'lastContacted',
       'totalBudget',
       'contentType',
       'companyName',
       'street',
       'city',
       'state',
       'zipcode',
       'country',
       'website'
   ];   
}
