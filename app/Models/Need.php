<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    use HasFactory;

    protected $table = 'needs';
    protected $fillable = [
        'title',
        'category_need_id',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryNeed::class, 'category_need_id', 'id');
    }
}
