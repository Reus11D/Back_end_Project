<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Queries;
// use Mail;

// class ContactController extends Controller
// {
//     public function contact(){
//         return view('contact-page');
//     }
//     public function contactSubmit(Request $request){
        // Queries::create([
        //     'name' => $request->name,
        //     'age' =>  $request->age,
        //     'email' =>  $request->email,
        //     'phone' =>  $request->phone,
        // ]);
//         Mail::send('emails.contactmail', [
//             'name'=> $request->name,
//             'age'=> $request->age,
//             'email'=> $request->email,
//             'phone'=> $request->phone,
//         ], function($mail) use($request){
//             $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
//             $mail->to("abilhayir.abay@gmail.com")->subject('Contact-Us');
//         });
//         return back();
//       }

// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Queries;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact-page');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'age' => 'required',
          'email' => 'required|email',
          'phone' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'age' =>  $request->age,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
        ];
        Queries::create([
            'name' => $request->name,
            'age' =>  $request->age,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
        ]);

        Mail::send('emails.contactmail', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['phone']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
