<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntityPhysique extends Model
{
    protected $table = 'entite_physique';
    protected $primaryKey = 'id_entite_physique';
    public $timestamps = false;
    protected $fillable = [
        'id_entite_social',
        'libelle',
        'numero_client',
        'adresse',
        'code_postal',
        'status_ep'
    ];
}
