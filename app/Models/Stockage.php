<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockage extends Model
{
    use HasFactory;

    protected $table = 'stockages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'bouteillesStockages',
        'designationStockages',
        'bouteillesidStockages',
        'productionsidStockages',
];
}