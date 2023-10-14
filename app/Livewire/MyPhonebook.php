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
        $phonebookId, $phone, $contacts, $allContact, $createNumber, $phonebook;



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

    public function saveNumber($id)
    {
      $this->validate([
            'phoneNumber' => 'required|string',
        ]);

        $this->phonebook=Phonebook::find($id);
        if ($this->phonebook) {
           Phonenumber::create([
            'phoneNumber'=>$this->phoneNumber,
            'phone_id'=>$this->phonebook->id
           ]);
        }
        // Phonenumber::create([
        //     'phoneNumber' => $this->phoneNumber,
        //     'phone_id' => $this->phonebookId,
        // ]);


        // $this->createNumber = Phonebook::find($id);
        // if ($this->createNumber) {
        //     $this->phonebookId = $this->createNumber->id;
        //     Phonenumber::create(
        //         [

        //             'phoneNumber' => $this->phoneNumber,
        //             'phone_id' => $this->phonebookId,
        //         ]
        //     );
        // }

        session()->flash('success', 'Your Number have been saved successfully');
    }

    public function editContact($id)
    {
        $this->validate([
            'phoneNumber' => 'required|string',
        ]);
        $allContact =  $this->contacts = Phonebook::find($id);
        if ($allContact) {
            $this->ids = $allContact->id;
            
        // Phonenumber::create([
        //     'phoneNumber'=>$this->phoneNumber,
        //     'phone_id'=>$this->ids,
        // ]);
        }

    }

    public function render()
    {
        $userId = Auth::id();
        $users = Phonebook::where('user_id', $userId)->get();
        return view('livewire.myphonebook', ['user' => $users,]);
    }
}
