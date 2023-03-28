<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mover extends Model
{
    use HasFactory;
    // public $table = 'movers';
    protected $fillable = [ 
        'first_name',
        'last_name',
        'date_of_birth',
        'mobile',
        'notes',
        'email',
        'status',
        'created_by',
        'company_id'
    ];
    public function connections()
    {
        return $this->belongsTo(Connection::class);
    }
}
