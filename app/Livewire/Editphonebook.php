<?php

namespace App\Livewire;

use App\Models\Community;
use Livewire\Component;


class Editphonebook extends Component
{
 public $used, $seeId;
    public function mount($id){
        $this->seeId=$id;
     $this->used=Community::find($id);
     
    }

    public function render()
    {

        return view('livewire.editphonebook');
    }
}
