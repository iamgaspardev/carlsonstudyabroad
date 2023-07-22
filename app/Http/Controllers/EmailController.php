<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{

    public function Emailsend(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'message' => 'required',
        ]);
        if($this->isOnline()){
            $data = [
                'recipient'=>'gasparmazima04@gmail.com',
                'subject' => $request->subject,
                'fromName' => $request->name,
                'fromEmail' => $request->email,
                'body' => $request->message
              ];
              Mail::send('email-template', $data, function($message) use ($data) {
                $message->to($data['recipient'])
                        ->from($data['fromEmail'],$data['fromName'])
                        ->subject($data['subject']);
              });
              return redirect()->back()->with('success' , 'Email successfully sent!');
        }else{
            return redirect()->back()->withInput()->with('error' , 'Check your internet connection..!');
        }

        

        
    }
}