<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Museo extends Model
{
    protected $fillable = ['nome', 'citta', 'descrizione', 'immagine'];

}
