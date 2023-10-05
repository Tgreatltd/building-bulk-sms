<div class="container mx-auto mt-20 max-w-4xl mx-auto bg-black p-6 rounded shadow-md" x-data="{name:false, data:false}">
    {{-- <template x-if="open">
      </template> --}}

       {{-- to add name --}}
   <div class="container mx-auto mt-20 max-w-4xl mx-auto bg-white p-6 rounded shadow-md">
        @if (session()->has('success'))
        <h1>{{session()->get('success')}}</h1>
        @endif
    <form wire:submit.prevent="saveName">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-semibold">Name</label>
            <input wire:model="name" type="text" id="name" name="name" class="form-input">
            @error('name')
                <small class="text-red-500">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">Add PhoneBook Name</button>
        </div>
    </form>

    <div class="mb-4">
        <button x-on:click="name=!name" type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">Click to Add Numbers</button>
    </div>
   </div>

   {{-- to add numbers --}}

   <div class="container mx-auto mt-20 max-w-4xl mx-auto bg-white p-6 rounded shadow-md" x-show="name">
    @if (session()->has('success'))
        <h1>{{session()->get('success')}}</h1>
    @endif
    <form wire:submit.prevent="saveNumber" action="" method="POST" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="number" class="block text-gray-600 text-sm font-semibold">Number</label>
            <input wire:model="phoneNumber"  name="phoneNumber" class="form-input">
        </div>

        <div class="mb-4">
            <label for="id" class="block text-gray-600 text-sm font-semibold">ID</label>
            <input disabled wire:model="id" type="text" id="id" name="id" class="form-input" value="{{auth()->user()->id}}">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
                Save Number
            </button>
        </div>
    </form>
</div>

{{-- to edit numbers --}}

<div class="container mx-auto mt-20 max-w-4xl mx-auto bg-white p-6 rounded shadow-md" x-show="data">
    <h1 class="text-blue-500">Edit Phone Number</h1>
    @if (session()->has('success'))
        <h1>{{session()->get('success')}}</h1>
    @endif
    <form wire:submit.prevent="saveNumber" action="" method="POST" class="max-w-md mx-auto">
        @csrf
        {{-- <h1>{{$contacts}}</h1> --}}

        <div class="mb-4">
            {{-- <label for="number" class="block text-gray-600 text-sm font-semibold">Number {{$contacts}}</label> --}}
            <label for="number" class="block text-gray-600 text-sm font-semibold">Number</label>
            <input wire:model="phoneNumber"  name="phoneNumber" class="form-input">
        </div>

        <div class="mb-4">
            <label for="id" class="block text-gray-600 text-sm font-semibold">ID</label>
            <input disabled wire:model="id" type="text" id="id" name="id" class="form-input"
            value="{{$ids}}">
            {{-- <div>
                @if ($contacts)
                <input disabled wire:model="id" type="text" id="id" name="id" class="form-input"
                value="{{$contacts->id}}">
                    <!-- Display other attributes of the Phonebook model as needed -->
                @else
                    <p>Contact not found</p>
                @endif
            </div> --}}
        </div>
    
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
                Save Number
            </button>
        </div>
    </form>
</div>

{{-- to display the names on databas --}}

   <div class="container mx-auto mt-20 max-w-4xl mx-auto bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-4">PHONEBOOK LIST</h2>
    <table class="min-w-full table" style="border: 2px solid black">
        <thead style="border: 2px solid black">
            <tr style="border: 2px solid black">
                <th class="px-4 py-2" style="border: 2px solid black" >ID</th>
                <th class="px-4 py-2" style="border: 2px solid black">NAME</th>
                <th class="px-4 py-2" style="border: 2px solid black">USER_ID</th>
                <th class="px-4 py-2" style="border: 2px solid black">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $usa)
            <tr>
                <td class="px-4 py-2" style="border: 2px solid black">{{$usa->id}}</td>
                <td class="px-4 py-2" style="border: 2px solid black">{{$usa->name}}</td>
                <td class="px-4 py-2" style="border: 2px solid black">{{$usa->user_id}}</td>
                <td class="px-4 py-2 flex justify-center " style="border: 1px solid black">
                    <div class="mb-4">
                        <button wire:click="editContact({{$usa->id}})" type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded" x-on:click="data=!data" >
                            EDIT
                        </button>
                    </div>
                    <div class="mb-4">
                        <button  type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">DELETE</button>
                    </div>
                </td>
        
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{-- <div>{{$phoneId['2']}}</div> --}}
    <div>{{$phoneId['2']}}</div>      
    </div>

</div>
