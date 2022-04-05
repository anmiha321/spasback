<?php

namespace App\Http\Controllers\Backend;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CommentController extends Controller
{
    public function index(Request $request)
    {
        $partners = Comment::query()->where('typeOfComment', '=', '1')->orderBy('created_at', 'DESC')->get();
        $results = Comment::query()->where('typeOfComment', '=', '0')->orderBy('created_at', 'DESC')->paginate(6);
        $comments = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $comments.='<div class="thanks__item">
                <p class="thanks__date">'.$result->DataParser().'</p>
                <div class="thanks__body">
                    <div class="thanks__left">
                        <p class="thanks__text">'.$result->title.'</p>
                        <p class="thanks__text">Кем выдана: '.$result->issued.'</p>
                    </div>
                    <div class="thanks__right">
                        <a href="/uploads/commentimages/'.$result->image.'" class="thanks__photo" data-fancybox>
                            <img src="/uploads/commentimages/'.$result->thumbnail.'" alt="" class="thanks__img">
                        </a>
                        <img src="/css/img/svg/thanks_search.svg" alt="Поиск" class="thanks__plug">
                    </div>
                </div>
            </div>';
            }
            return $comments;
        }

        return view('comments.index', compact('partners'));
    }
}
