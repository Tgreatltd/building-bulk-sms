<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class Sendsms extends Component
{

    public $number,$sender,$message,$info;
    public function render()
    {
        return view('livewire.sendsms');
    }
    public function sendSms(){
        $this->info='';
        dd($this->number, $this->sender, $this->message);
        // $client = new Client();
       
         $this->info='message sent successfully';
    }
}
