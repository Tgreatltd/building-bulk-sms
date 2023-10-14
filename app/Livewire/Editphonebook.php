<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\Phonebook;
use Livewire\Component;


class Editphonebook extends Component
{
    public $phonebookId;
    public $phonebook;
    public function mount($id)
    {
        $this->phonebookId = $id;
    }
    public function render()
    {

        return view('livewire.editphonebook');
    }
}
