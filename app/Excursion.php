<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
    protected $fillable = [
        'logo',
        'title_company',
        'title_excursion',
        'description',
        'date',
        'address',
        'state',
        'duration',
        'company_id'
    ];
}
