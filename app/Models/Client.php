<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'first_name',
        'email',
        'billing_zipcode',
        'billing_country',
        'billing_telephone',
        'billing_city',
        'shipping_zipcode',
        'shipping_country',
        'shipping_telephone',
        'shipping_city',
        'project_type'
    ];
}
