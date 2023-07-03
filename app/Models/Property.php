<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'transaction',
        'address1',
        'address2',
        'address3',
        'postcode',
        'city',
        'plot_size',
        'property_size',
        'num_floors',
        'num_rooms',
        'has_garden',
        'has_garage',
        'price',
        'ad_link',
        'created_by'
    ];
}
