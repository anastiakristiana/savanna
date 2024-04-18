<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
            'body' => 'required',
        ], [
            'name.required' => __('layout.required', ['attribute' => __('home.contact_3')]),
            'email.required' => __('layout.required', ['attribute' => 'Email']),
            'email.email' => __('layout.email', ['attribute' => 'Email']),
            'phone.numeric' => __('layout.numeric', ['attribute' => __('home.contact_4')]),
            'body.required' => __('layout.required', ['attribute' => __('home.contact_5')]),
        ]);

        $recipients = ['anastia.kristiana@gmail.com', 'ra@refineri.id'];

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipients) {
            $message->to($recipients);
            $message->subject('New Contact Form Submission');
        });

        if (count(Mail::failures()) > 0) {
            return response()->json(['error' => trans('layout.unable_to_send_message')]);
        } else {
            return response()->json(['success' => trans('layout.message_sent_successfully')]);
        }
        
    }
}
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
            'body' => 'required',
            'recaptcha_token' => 'required',
        ], [
            'name.required' => __('layout.required', ['attribute' => __('home.contact_3')]),
            'email.required' => __('layout.required', ['attribute' => 'Email']),
            'email.email' => __('layout.email', ['attribute' => 'Email']),
            'phone.numeric' => __('layout.numeric', ['attribute' => __('home.contact_4')]),
            'body.required' => __('layout.required', ['attribute' => __('home.contact_5')]),
            'recaptcha_token.required' => __('Please verify that you are not a robot.'),
        ]);

        $recaptchaResponse = $request->input('recaptcha_token');
        $recaptchaSecretKey = config('app.recaptcha_secret_key');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecretKey,
            'response' => $recaptchaResponse,
        ]);

        if ($response->successful() && $response->json('success')) {
            $recipients = ['anastia.kristiana@gmail.com', 'naztia.mot@gmail.com'];

            try {
                Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipients) {
                    $message->to($recipients);
                    $message->subject('New Contact Form Submission');
                });

                if (count(Mail::failures()) > 0) {
                    return response()->json(['error' => trans('layout.unable_to_send_message')]);
                } else {
                    return response()->json(['success' => trans('layout.message_sent_successfully')]);
                }
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                return response()->json(['error' => trans('layout.unable_to_send_message')]);
            }
        } else {
            return response()->json(['error' => trans('layout.invalid_recaptcha')]);
        }
    }
}
