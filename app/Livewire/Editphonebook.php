<?php

namespace App\Livewire;

use App\Models\Community;
use Livewire\Component;


class Editphonebook extends Component
{
public $used, $communuityId;


public function mount($id){
    $this->used = Community::find($id);
    $communityId=$id;
   ;
    
}
    public function render()
    {

        return view('livewire.editphonebook');
    }
}
