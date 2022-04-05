<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeopleInSearch extends Model
{
    use HasFactory, SoftDeletes;

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
        'police',
        'photo_of_missing',
        'extra_info',
        'status',
    ];

    public function getPhoneFormattedAttribute() {
        $phone = $this->phone;
        $a = substr($phone, 0, 1);
        $ac = substr($phone, 1, 3);
        $prefix = substr($phone, 4, 3);
        $suffix = substr($phone, 7,2);
        $extrasuffix = substr($phone, 9,2);

        return "+{$a} ({$ac}) {$prefix}-{$suffix}-{$extrasuffix}";
    }
}
