<?php

namespace App\Livewire;

use App\Models\Community;
use Livewire\Component;


class Editphonebook extends Component
{
public $used,  $communityId;

public function mount($id){
    $this->used = Community::find($id);
    $this->communityId=$id;
    
}
    public function render()
    {
        return view('livewire.editphonebook');
        return view('livewire.editphoneb
    }
}
