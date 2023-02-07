<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $table = 'livraison';
    protected $primaryKey = 'id';
    protected $fillable = [
        'numeroLivraison',
        'dateemissionLivraison',
        'dateprevuLivraison',
        'MontantLivraison',
        'nomclientLivraison',
        'contactclientLivraison',
        'lieuLivraison',
    ];
}
