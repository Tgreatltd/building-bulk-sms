<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\Phonebook;
use App\Models\Phonenumber;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyPhonebook extends Component
{
    public $number, $name, $data,  $users, $used, $seeId, $phoneId;

   

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
        session()->flash('success','Your Name have been saved');
        $this->mount();
    }

public function saveNumber(){
$phone_id = Auth::id();
 $this->validate([
   'phoneNumber'=> 'required|string',
]);
Phonenumber::create([
    'phoneNumber'=>$this->phoneNumber,
    'phone_id'=>$phone_id,
]);
session()->flash('success', 'Your Number have been saved successfully');
}
public function mount()
{
    // Retrieve the user IDs from the Phonebook model
    $this->phoneId = Phonebook::pluck('id')->toArray();
}


    public function render()
    {
        $userId= Auth::id();
        $users= Phonebook::where('user_id',$userId)->get();
        return view('livewire.myphonebook', ['user'=>$users]);
    }

}
