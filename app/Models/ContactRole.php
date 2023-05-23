<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRole extends Model
{
    protected $table = 'contactRole';
    protected $primaryKey = 'id_contact_role';
    public $timestamps = false;
    protected $fillable = [
        'id_contact',
        'role',
    ];
}
