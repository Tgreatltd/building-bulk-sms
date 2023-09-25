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
          $this->validate([
            'number'=> 'required|string',
            'name'=> 'required|string|unique:communities,name',
        ]);
        Community::create(
            [ 
            
            'name'=>$this->name,
            'number'=>$this->number,
            ]
        );
    }
}
