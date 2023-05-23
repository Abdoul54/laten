<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id_article';
    protected $createdAt = 'date_creation';
    public $timestamps = false;
    protected $fillable = [
        'id_contrat',
        'libelle',
        'montant',
        'remise',
        'devise'
    ];}
