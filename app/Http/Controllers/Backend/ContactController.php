<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $users_owners = User::where('position', '1')->get();
        return view('contacts.index', compact('users_owners'));
    }
}
