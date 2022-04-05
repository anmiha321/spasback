<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class BlogController extends Controller
{
    public function index(Request $request)
    {
        $BlogHeader = Blog::query()
            ->latest()
            ->first();
        $BlogHeaderdate = Blog::query()
            ->latest()
            ->value('created_at');
        $results = Blog::query()->where('created_at', '!=', $BlogHeaderdate)->orderBy('created_at', 'DESC')->paginate(6);
        $blogs = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $blogs.='<div class="blog__item">
                <p class="blog__date">'.$result->DataParserBlog().'г.</p>
                <div class="blog__row">
                    <div class="blog__left">
                        <div class="blog__photo ibg"><img src="/uploads/blogImages/'.$result->image.'" alt="Новость" class="blog__img"></div>
                    </div>
                    <div class="blog__right">
                        <div class="blog__info">
                            <h2 class="blog__title">'.$result->title.'</h2>';
                foreach ($result->PmainPage() as $element)
                {
                    $blogs .='<p class="blog__text">'.$element.'</p>';
                }

                           $blogs .='<a href="'.url('/Blog/Articles/'.$result->slug.'').'" class="blog__more">Читать больше</a>
                        </div>
                    </div>
                </div>
            </div>';
            }
            return $blogs;
        }
        return view('blog.index', compact('BlogHeader'));
    }

    public function edit($slug)
    {
        $article = Blog::query()->where('slug', $slug)->first();
        $read_more = Blog::where('slug', '!=', $slug)->get();
        return view('blog.news.index',compact('article', 'read_more'));
    }
}
