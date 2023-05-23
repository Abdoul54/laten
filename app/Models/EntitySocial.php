<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntitySocial extends Model
{
    protected $table = 'entity_sociale';
    protected $primaryKey = 'id_entite_social';
    protected $fillable = [
        'raison_social',
        'numero_registre',
        'patente',
        'adresse',
        'code_postal',
    ];
}
