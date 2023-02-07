<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouteille extends Model
{
    use HasFactory;
    protected $table = 'Bouteilles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'referenceBouteilles',
        'numeroBouteilles',
        'numeroorigineBouteilles',
        'descriptionBouteilles',
        'dateepreuveBouteilles',
        'finepreuveBouteilles',
        'etatBouteilles',
        'statutBouteilles',
        'positionsBouteilles',
        'volumeBouteilles',
        'formatBouteilles',
        'designationBouteilles',
        'famillesidBouteilles',
        'formatsidBouteilles',
    ];
}
