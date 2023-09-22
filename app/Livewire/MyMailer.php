<?php

namespace App\Livewire;

use Livewire\Component;

class MyMailer extends Component
{
    public $email, $message, $semder;
    public function render()
    {
        return view('livewire.my-mailer');
    }

    public function sendMail(){

    }
}
