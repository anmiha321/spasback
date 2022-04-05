<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('join.index');
    }
   public function store(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'name' => ['required', 'string', 'max:255'],
           'surname' => ['required', 'string', 'max:255'],
           'vk' => ['required', 'url', 'max:255'],
           'city' => ['required', 'string', 'max:255'],
           'is_auto_volunteer' => ['required', 'numeric', 'max:255'],
           'birthday' => ['required', 'date', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
           'phone' => ['required', 'string', 'unique:users,phone'],
       ]);

       if ($validator->fails()) {
           return response()->json([
               'status' => 400,
               'errors' => $validator->messages(),
           ]);
       } else {
           $phone = $request['phone'];

           $f_tel = str_replace(' ', '', $phone);
           $f_tel = str_replace('+', '', $f_tel);
           $f_tel = str_replace('(', '', $f_tel);
           $f_tel = str_replace(')', '', $f_tel);
           $f_tel = str_replace('-', '', $f_tel);
           $generated_password = Str::random(8);
           $generated_password_field = $generated_password;
           $item = User::create([
               'name' => $request['name'],
               'surname' => $request['surname'],
               'vk' => $request['vk'],
               'city' => $request['city'],
               'walk_auto' => $request['is_auto_volunteer'],
               'birthday' => $request['birthday'],
               'email' => $request['email'],
               'phone' => $f_tel,
               'status' => '0',
               'password' => Hash::make($generated_password_field),
           ]);
           $item->delete();
           $email_data = array(
               'name' => $request['name'],
               'surname' => $request['surname'],
               'email' => $request['email'],
               'password' => $generated_password,
           );

           Mail::send('email.welcome_email', $email_data, function ($message) use ($email_data) {
               $message->to($email_data['email'], $email_data['name'])
                   ->subject('Расмотрение заявки на регистрацию')
                   ->from('spas@ww.net.ru', 'spas');
           });

           return [$item, response()->json([
               'status' => 200,
               'message' => 'Доброволец успешно создан!',
           ])];
       }
   }
}
