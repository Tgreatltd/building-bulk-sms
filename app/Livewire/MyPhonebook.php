<?php

namespace App\Livewire;

use Livewire\Component;

class MyPhonebook extends Component
{
    public $number, $name;
    public function render()
    {
        return view('livewire.myphonebook');
    }

    public function saveContact(){
        dd($this->number);
    }
}
