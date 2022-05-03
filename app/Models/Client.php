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
        'image',
        'email',
        'details',
        'tag',
        'billing_zipcode',
        'billing_streat',
        'billing_state',
        'billing_country',
        'billing_telephone',
        'billing_website',
        'billing_city',
        'tax_number',
        'shipping_zipcode',
        'shipping_country',
        'shipping_streat',
        'shipping_state',
        'shipping_website',
        'shipping_telephone',
        'shipping_city',
        'lastproject',
        'project_type',
        'comment'
    ];
}
