<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PeopleInSearch;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::query()->where('status', '=', '1')->get();
        $valantors = User::query()->where('status', '=', '2')->get();
        $people_search = PeopleInSearch::query()->where('status', '=', '1')->get();
        $people_that_find_out = PeopleInSearch::query()->where('status', '=', '2')->get();
        return view('index', compact('user', 'people_search', 'valantors', 'people_that_find_out'));
    }
}
