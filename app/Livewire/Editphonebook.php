<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\Phonebook;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;


class Editphonebook extends Component
{
    public $phonebookId, $phonebook;
    
    public function mount($id)
    { 
        $this->phonebookId = $id;
       
    }
    public function render()
    {
        $this->phonebook = Phonebook::find($this->phonebookId);
        return view('livewire.editphonebook', [ 'phonebook' => $this->phonebook]);
    }
}
