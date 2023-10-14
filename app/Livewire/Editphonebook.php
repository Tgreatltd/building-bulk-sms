<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\Phonebook;
use Livewire\Component;


class Editphonebook extends Component
{
    public $user, $id;
 public function mount($id){
    $this->user=Phonebook::find($id);
 }

    public function render()
    {

        return view('livewire.editphonebook');
    }
}
