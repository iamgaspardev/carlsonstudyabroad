<?php

namespace App\Http\Livewire;
use Mail;

use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $subject;
    public $email;
    public $message;
    public function Emailsend()
    {
        
            $data = [
                'recipient'=>'gasparmazima04@gmail.com',
                'subject' => $this->subject,
                'fromName' => $this->name,
                'fromEmail' => $this->email,
                'messsage' => $this->message
              ];
              Mail::send('email-template', $data, function($message) use ($data) {
                $message->to($data['recipient'])
                        ->from($data['fromEmail'],$data['fromName'])
                        ->subject($data['subject']);
              });
              return redirect()->back()->with('success' , 'Email successfully sent!');  
    }
    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
