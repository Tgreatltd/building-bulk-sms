<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\Phonebook;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyPhonebook extends Component
{
    public $number, $name, $data,  $users, $used, $seeId;

    // public function saveContact(){
        
    //     // dd($this->number);
    //       $this->validate([
    //         'number'=> 'required|string',
    //         'name'=> 'required|string|unique:communities,name',
    //     ]);
    //     Community::create(
    //         [ 
            
    //         'name'=>$this->name,
    //         'number'=>$this->number,
    //         ]
    //     );

    //  }

    public function save(){
        $this->validate([
            'name'=> 'required|string|unique:phonebooks,name',
        ]);
      $user_id= Auth::id();
        Phonebook::create(
            [ 
            
            'name'=>$this->name,
            'user_id'=>$user_id,
            ]
        );
    }

   

    //  public function mount(){
    //     $this->user = Community::all();
    //     $this->user=auth()->user();

    //     if ($this->user) {
    //         $this->users = Community::all();
    //     }
    //  }

    //  public function selectUser($id){
    //     $this->data = Community::find($id);
       
    //  }


    public function render()
    {
        $userId= Auth::id();
        $users= Phonebook::where('user_id',$userId)->get();
        return view('livewire.myphonebook', ['user'=>$users]);
    }

}
