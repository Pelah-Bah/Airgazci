<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    protected $table = 'productions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'numeroProductions',
        'gazProductions',
        'dateProductions',
        'operateur1Productions',
        'operateur2Productions',
        'operateur3Productions',
        'producteur1Productions',
        'producteur2Productions',
        'producteur3Productions',
        'observationProductions',
        'faproduitid',
        'quaniteProductions',
];
}
