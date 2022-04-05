<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\FAQRequest;
use App\Mail\FAQMail;
use App\Models\FAQ;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FAQController extends Controller
{
    public function index()
    {
        $questions = FAQ::all();
//        $answers = FAQ::where('typeOfAnswer', '1')->get();
        return view('faq.index', compact('questions'));
    }

    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'faq_email' => ['required', 'email', 'max:255'],
            'faq_msg' => ['required', 'string', 'max:2500'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            $email_data = array(
                'faq_email' => $request['faq_email'],
                'faq_msgs' => explode("\n", $request['faq_msg']),
            );

            Mail::send('email.faq_email', $email_data, function ($message) use ($email_data) {
                $message->to('spas@ww.net.ru')
                    ->subject('Задан вопрос от '.$email_data['faq_email'].'')
                    ->from('spas@ww.net.ru', $email_data['faq_email']);
            });


            return response()->json([
                'status' => 200,
                'message' => 'Вопрос успешно отправлен!',
            ]);
        }
        }
}
