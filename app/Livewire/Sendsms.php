<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Illuminate\Mail\TextMessage;
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
        $numbersArray = explode(',', $this->number);
        $dumpedNumbers =[];
        // loop through each number and display it
       foreach($numbersArray as $numba){
            // $dumpedNumbers[]= $numba;
            dd($numbersArray);
        }
        // dump all the numbers at once after looping
        // dd($dumpedNumbers); 
        dd($this->number, $this->sender, $this->message);
        // $client = new Client();
     
         $this->info='message sent successfully';
    }
}
