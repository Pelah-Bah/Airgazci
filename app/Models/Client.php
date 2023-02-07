<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'compteclient', 
        'libelleclient', 
        'appelationclient', 
        'categorieclient',
        'interlocuteurclient', 
        'celinterlocuteurclient', 
        'paysclient', 
        'villeclient', 
        'observationclient', 
        'adressepostaleclient', 
        'adressegeoclient', 
        'contact1client', 
        'contact2client', 
        'telephoneclient', 
        'faxclient'
    ];

}
