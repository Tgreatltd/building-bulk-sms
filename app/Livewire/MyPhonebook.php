<?php

namespace App\Livewire;

use App\Models\Community;
use Livewire\Component;

class MyPhonebook extends Component
{
    public $number, $name, $data, $user, $users, $used, $seeId;

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
        // $this->user=auth()->user();

        // if ($this->user) {
        //     $this->users = Community::all();
        // }
     }

    //  public function selectUser($id){
    //     $this->data = Community::find($id);
       
    //  }


    public function render()
    {
    
        return view('livewire.myphonebook');
    }

}
