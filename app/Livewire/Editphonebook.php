<?php

namespace App\Livewire;

use App\Models\Community;
use Livewire\Component;

class Editphonebook extends Component
{
    public $id;
    public function render($id)
    {
        return view('livewire.editphonebook', ['user'=>Community::find($id)]);
    }
}
