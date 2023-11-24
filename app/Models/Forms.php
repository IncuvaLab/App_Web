<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Model para los formularios
class Forms extends Model
{
    use HasFactory;

    protected $fillable = [
        'formId',
        'formName',
        'formText',
        'formComments',
        'idTeam'
    ];
}
