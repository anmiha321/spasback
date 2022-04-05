<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryNeed extends Model
{
    use HasFactory;

    protected $table = 'category_needs';
    protected $fillable = [
        'title',
    ];

    public function needs()
    {
        return $this->hasMany(Need::class, 'category_need_id');
    }
}
