<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'image',
        'thumbnail',
        'issued',
        'title',
        'typeOfComment',
    ];

    public function DataParser()
    {
        return Carbon::parse($this->created_at)->format('d.m.Y');

    }
}
