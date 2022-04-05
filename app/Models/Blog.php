<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Blog extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'image',
        'teaser',
        'article',
        'slug'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function DataParserBlog()
    {
        return Carbon::parse($this->created_at)->format('d.m.Y');

    }

    public function PmainPage() {
        $teaser = $this->teaser;
        $teaserSpliter = explode('/', $teaser); // Restricts it to only 2 values, for names like Billy Bob Jones

//        $teaser_first_p = $teaserSpliter[0];
//        $teaser_second_p = !empty($teaserSpliter[1]) ? $teaserSpliter[1]: "";
        return $teaserSpliter;
    }

    public function ParticlePage() {
        $article = $this->article;
        $articleSpliter = explode('/', $article); // Restricts it to only 2 values, for names like Billy Bob Jones

//        $teaser_first_p = $teaserSpliter[0];
//        $teaser_second_p = !empty($teaserSpliter[1]) ? $teaserSpliter[1]: "";
        return $articleSpliter;
    }
}
