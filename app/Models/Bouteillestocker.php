<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouteillestocker extends Model
{
    use HasFactory;
    protected $table = 'bouteillestockers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'numeroBouteillestockers',
        'productions_id',
    ];
}