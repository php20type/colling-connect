<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'mover_id',
        'mover_status',
        'moving_date',
        'lease_length',
        'services'
    ];

}
