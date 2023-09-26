<?php

namespace App\Livewire;

use App\Models\Community;
use Livewire\Component;

class MyPhonebook extends Component
{
    public $number, $name, $data, $users, $used, $id;
    public function render()
    {
        $users = Community::all();

        return view('livewire.myphonebook', [
         'user'=>$users,   
        ]);
    }

    public function saveContact(){
        
        // dd($this->number);
          $this->validate([
            'number'=> 'required|string',
            'name'=> 'required|string|unique:communities,name',
        ]);
        Community::create(
            [ 
            
            'name'=>$this->name,
            'number'=>$this->number,
            ]
        );

     }
// public function editContact($id){
//     $this->id=$id;
//     $this->used = Community::find($id);

//     return view('editphonebooks');
// }
}
