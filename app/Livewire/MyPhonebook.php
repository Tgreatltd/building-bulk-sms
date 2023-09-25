<?php

namespace App\Livewire;

use App\Models\Community;
use Livewire\Component;

class MyPhonebook extends Component
{
    public $number, $name, $data;
    public function render()
    {
        return view('livewire.myphonebook');
    }

    public function saveContact(){
        
        // dd($this->number);
        $data = $this->validate([
            'number'=> 'required|string',
            'sender'=> 'required|string',
            'message'=> 'required|string|',
        ]);
        Community::create($data);
    }
}
