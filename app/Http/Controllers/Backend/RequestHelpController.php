<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PeopleInSearch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Image;
class RequestHelpController extends Controller
{
    public function index()
    {
        return view('requestHelp.index');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fio_applicant' => ['required', 'string', 'max:255'],
            'phone_applicant' => ['required', 'string', 'max:255'],
            'fio_missed' => ['required', 'string', 'max:255'],
            'birthday_missed' => ['required', 'date', 'max:255', 'date_format:Y-m-d'],
            'date_missed' => ['required', 'date', 'max:255', 'date_format:Y-m-d'],
            'time_missed' => ['required', 'date_format:H:i', 'max:255'],
            'place_missed' => ['required', 'string', 'max:255'],
            'type_missed' => ['required', 'numeric', 'max:255'],
            'cond_missed' => ['required', 'string', 'max:255'],
            'police_missed' => ['required', 'string', 'max:255'],
            'photo_missed' => ['image', 'mimes:jpeg,jpg,png,gif,svg', 'required', 'max:2048'],
            'info_missed' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            $phone = $request['phone_applicant'];

            $f_tel = str_replace(' ', '', $phone);
            $f_tel = str_replace('+', '', $f_tel);
            $f_tel = str_replace('(', '', $f_tel);
            $f_tel = str_replace(')', '', $f_tel);
            $f_tel = str_replace('-', '', $f_tel);

            if ($request->hasFile('photo_missed'))
            {
                $image = $request->file('photo_missed');
                $filename = date('Y-m-d_H_i_s') . '.' . $image->getClientOriginalName();
                Image::make($image)->resize(372, 295)->save(public_path('/uploads/missing_people_photo/' . $filename));
            }
            $item = PeopleInSearch::create([
                'fio_of_responsible' => $request['fio_applicant'],
                'phone' => $f_tel,
                'fio_of_missing' => $request['fio_missed'],
                'birthday' => $request['birthday_missed'],
                'day_of_missing' => $request['date_missed'].' '.$request['time_missed'],
                'place_of_missing' => $request['place_missed'],
                'type_of_place' => $request['type_missed'],
                'missing_explanation' => $request['cond_missed'],
                'police' => $request['police_missed'],
                'photo_of_missing' => $filename,
                'extra_info' => $request['info_missed'],
                'status' => '0',
            ]);
            $item->delete();
//            $email_data = array(
//                'fio_of_responsible' => $request['fio_applicant'],
//            );
//
//            Mail::send('email.receive_email', $email_data, function ($message) use ($email_data) {
//                $message->to($email_data['email'], $email_data['fio_of_responsible'])
//                    ->subject('Принято на расмотрение')
//                    ->from('spas@ww.net.ru', 'spas');
//            });

            return response()->json([
                'status' => 200,
                'message' => 'Заявка успешно создана!',
            ]);
        }
    }
}
