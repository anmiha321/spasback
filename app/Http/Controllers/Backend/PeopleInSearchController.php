<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PeopleInSearch;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeopleInSearchController extends Controller
{
    public function index(Request $request)
    {
        $results = PeopleInSearch::query()->where('status', '=', '1')->orderBy('created_at', 'DESC')->paginate(6);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces.='<div class="active-search__item person">
                    <div class="active-search__info person__info">
                        <div class="person__top">
                            <p class="person__name">'.$result->fio_of_missing.'</p>
                            <p class="person__age"><span class="person__age-text">Возраст:</span> '.Carbon::parse($result->birthday)->age.' года</p>
                        </div>
                        <div class="person__call">
                            <div>
                                <p class="person__text">Номер координатора:</p>
                                <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                            </div>
                        </div>
                    </div>
                    <div class="active-search__photo person__photo">
                        <img src="/uploads/missing_people_photo/'.$result->photo_of_missing.'" alt="ФИО" class="person__img">
                    </div>
                </div>';
            }
            return $artilces;
        }

        return view('activeSearch.index');
    }
}
