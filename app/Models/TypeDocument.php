<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeDocument extends Model
{

    protected $table = 'type_identification';

    protected $fillable = [
        'name',
        'description'
    ];
}
