<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\Phonebook;
use Livewire\Component;


class Editphonebook extends Component
{
    public $phonebookId, $phonebook;
    
    public function mount($id)
    { 
        $this->phonebookId = $id;
        $this->phonebook = Phonebook::find($this->phonebookId);
       
    }
    public function render()
    {
       
        return view('livewire.editphonebook', [ 'phonebook' => $this->phonebook]);
    }
}
