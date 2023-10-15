<?php

namespace App\Livewire;

use App\Jobs\sendEmailJob;
use App\Mail\sendEmail;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Mail\TextMessage;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Sendsms extends Component
{

    public $number,$sender,$message,$info;
    public function render()
    {
        return view('livewire.sendsms');
    }
    public function sendSms(){
        
        // $data = ['subject'=>'Hello Testing', 'message'=> 'Message Sent for 123'];
        // dispatch(new sendEmailJob($data));
        // Mail::to('olamoyeguntimothy@gmail.com')->send(new sendEmail());
        // dd('Sent');
        $this->validate([
            'number'=> 'required|string',
            'sender'=> 'required|string',
            'message'=> 'required|string|',
        ]);
        $this->info='';
        
        $numbersArray = explode(',', $this->number);
        // $dumpedNumbers =[];
        
        // loop through each number and display it

       foreach($numbersArray as $numba){
            // $dumpedNumbers[]= $numba;
            dd($numbersArray, $this->sender,$this->message );
        }
        
        // dump all the numbers at once after looping
        // dd($dumpedNumbers); 

        // dd($this->number, $this->sender, $this->message);
        $client = new Client();
        $response=$client->post('http://www.bulksmsnigeria.com/api/v1/sms/create?api_token=t8NbaYdc5W5WGMk4MXy9mAypdgY2cJEAgRfJI8ZdiSzFY6ZdNEW1l6skgg0v
        &from='.$this->sender.'&to='.$this->number.'&body='.$this->message);
        
     
         $this->info='message sent successfully';
    }
}
