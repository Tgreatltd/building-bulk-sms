<?php

namespace App\Livewire;

use App\Jobs\sendEmailJob;
use Livewire\Component;

class MyMailer extends Component
{
    public $email, $message, $subject, $info, $emailArray;
    public function render()
    {
        return view('livewire.my-mailer');
    }

    public function sendMail()
    {
        $this->info = '';
        $this->validate([
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string|',
        ]);
        $emailArray=explode(',', $this->email);
        foreach ($emailArray as $mail) {
            $data = ['subject' => $this->subject, 'message' => $this->message, 'email' => $emailArray]; 
        }
      
        dispatch(new sendEmailJob($data));
        // Mail::to('olamoyeguntimothy@gmail.com')->send(new sendEmail());
        dd('Sent');
    }
}
