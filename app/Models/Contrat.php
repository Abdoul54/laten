<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $table = 'contrat';
    protected $primaryKey = 'id_contrat';
    protected $createdAt = 'date_creation';
    public $timestamps = false;

    protected $fillable = [
        'id_entite_physique',
        'numero_contrat',
        'version_contrat',
        'type_contrat',
        'frequence_facturation',
        'statut_contrat',
        'date_demarrage' 
    ];

    public function Versions()
    {
        return $this->hasMany('App\Models\Contrat', 'id_contrat');
    }
}
