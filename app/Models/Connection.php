<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;
    public $table = 'connections';
    protected $fillable = [ 
        'mover_id',
        'application_id',
        'mover_status',
        'moving_date',
        'lease_length',
        'services'
    ];
    public function movers()
    {
           return $this->hasMany(Mover::class,'id','mover_id');
    }
}
