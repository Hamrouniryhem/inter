<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $table = 'ressources';
    protected $primaryKey = 'id';
    protected $fillable = ['Nom','Quantité'];
}
