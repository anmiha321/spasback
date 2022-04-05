<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\CategoryNeed;
use App\Models\Need;
use Illuminate\Http\Request;

class NeedController extends Controller
{
    public function index(Request $request)
    {
        $results = CategoryNeed::with('needs')->orderBy('id')->paginate(24);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result)
            {
                $artilces.='<div class="needs__item">
                        <div>
                            <p>'.$result->title.'</p>';
                foreach ($result->needs as $row)
                {
                    $artilces.='<p>'.$row->title.'</p>';
                }

                $artilces.='</div>
                    </div>';
            }


            return $artilces;
        }
        return view('help.index');
    }
}
