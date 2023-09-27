<?php

namespace App\Livewire;

use App\Models\Community;
use Livewire\Component;

class MyPhonebook extends Component
{
    public $number, $name, $data, $user, $used, $seeId;

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

    
     public function mount(){
        $this->user = Community::all();
     }

     public function selectUser($id){
        $data=['name'=>$this->name, 'number'=>$this->number, 'id'=>$this->id];
        $this->data = Community::find($id);
       
     }


    public function render($id)
    {
    
        return view('livewire.myphonebook');
    }

}
