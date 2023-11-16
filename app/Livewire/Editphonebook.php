<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\Phonebook;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;


class Editphonebook extends Component
{
    public $phonebookId, $phonebook, $id;
    
    public function mount($id)
    { 
        $this->id = $id;
        $this->phonebookId = Phonebook::find($id);
       
    }
    public function render()
    {
        
        return view('livewire.editphonebook');
    }
}
