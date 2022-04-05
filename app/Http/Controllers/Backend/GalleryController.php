<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $results = Gallery::orderBy('created_at', 'desc')->get()
            ;
        $res = $results
            ->groupBy(function ($result) {
                return $result->created_at->format('d.m.Y');
            });
//        $gallery = '';
//        if ($request->ajax()) {
//            foreach ($res as $key => $result) {
//                $gallery.='<div class="gallery__item">
//                <p class="gallery__date">'.$key.'г.</p>
//                <div class="gallery__body">';
//                foreach ($result as $item)
//                {
//                    $gallery.='<div class="gallery__photo gf_big1">
//                        <img src="uploads/photoGallery/'.$item->image.'" alt="Галерея" class="gallery__img">
//                    </div>';
//                }
//                $gallery.='</div>
//                </div>
//            </div>';
//            }
//            return $gallery;
//        }

        return view('gallery.index', compact('res'));
    }
}
