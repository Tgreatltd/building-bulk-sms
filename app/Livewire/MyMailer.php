<?php

namespace App\Livewire;

use App\Jobs\sendEmailJob;
use Livewire\Component;

class MyMailer extends Component
{
    public $email, $message, $subject, $info;
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
        $data = ['subject' => $this->subject, 'message' => $this->message, 'email' => $this->email];
        dispatch(new sendEmailJob($data));
        // Mail::to('olamoyeguntimothy@gmail.com')->send(new sendEmail());
        dd('Sent');
    }
}
