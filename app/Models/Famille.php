<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;
    protected $table = 'familles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'libellefamille',
        'appelationfamille',
        'typefamille',
        'descriptionfamille'
    ];
}