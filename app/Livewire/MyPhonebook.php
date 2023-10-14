<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\Phonebook;
use App\Models\Phonenumber;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyPhonebook extends Component
{
    public $number, $name, $data,  $users, $ids, $phoneNumber,
        $phonebookId, $phone, $contacts, $allContact, $createNumber, $phonebook,$phone_id;



    public function saveName()
    {
        $this->validate([
            // 'name'=> 'required|string|unique:phonebooks,name',
            'name' => 'required|string',
        ]);
        $user_id = Auth::id();
        Phonebook::create(
            [

                'name' => $this->name,
                'user_id' => $user_id,
            ]
        );
        session()->flash('success', 'Your Name have been saved');
    }

    public function saveNumber()
    {
      $this->validate([
            'phoneNumber' => 'required|string',
        ]);

        $phonebook=Phonebook::find($this->phone_id);
         Phonenumber::create([
            'phoneNumber'=>$this->phoneNumber,
            'phone_id'=>$phonebook->id,
           ]);
    
        
        $this->reset(['phoneNumber']);

        session()->flash('savedNumber', 'Your Number have been saved successfully');
    }

    public function editContact($id)
    {
        $this->validate([
            'phoneNumber' => 'required|string',
        ]);

        $phonebook=Phonebook::find($this->phone_id);
         Phonenumber::create([
            'phoneNumber'=>$this->phoneNumber,
            'phone_id'=>$phonebook->id,
           ]);
       

    }

    public function render()
    {
        $userId = Auth::id();
        $users = Phonebook::where('user_id', $userId)->get();
        return view('livewire.myphonebook', ['user' => $users,]);
    }
}
