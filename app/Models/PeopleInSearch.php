<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleInSearch extends Model
{
    use HasFactory;

    protected $table = 'people_in_searches';
    protected $fillable = [
        'fio_of_responsible',
        'phone',
        'fio_of_missing',
        'birthday',
        'day_of_missing',
        'place_of_missing',
        'type_of_place',
        'missing_explanation',
        'photo_of_missing',
        'extra_info',
        'status',
    ];
}
