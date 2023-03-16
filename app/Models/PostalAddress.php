<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalAddress extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'mover_id',
        'unit_no',
        'street_no',
        'street_name',
        'street_type',
        'suburb',
        'postcode',
        'state',
        'pobox_type',
        'pobox_no'
    ];
}
