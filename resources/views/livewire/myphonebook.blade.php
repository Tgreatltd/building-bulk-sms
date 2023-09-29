<div>
    {{-- If your happiness depends on money, you will never be happy with yourself.
    <div class="container mx-auto mt-8 max-w-4xl mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Form</h2>
        <form wire:submit.prevent="saveContact"> <!-- Replace 'your-route-name' with the actual route for form submission -->
            @csrf <!-- Add a CSRF token field for security -->
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Name:</label>
                <input type="text"   wire:model="name" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
                @error('name')
                   <small class="text-red-500">{{$message}}</small> 
                @enderror
            </div>
            <div class="mb-4">
                <label for="number" class="block text-gray-600">Number:</label>
                <input type="text"   wire:model="number" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400 py-20">
                @error('number')
                  <small class="text-red-500">{{$message}}</small>  
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-700">Save</button>
            </div>
        </form>
    </div>

    
    

       


        <div class="">
            <h2 class="text-2xl font-semibold mb-4">PHONEBOOK LIST</h2>
            <table class="min-w-full table">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">NAME</th>
                        <th class="px-4 py-2">NUMBERS</th>
                        <th class="px-4 py-2">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $usa)
                    <tr>
                        <td class="px-4 py-2">{{$usa->id}}</td>
                        <td class="px-4 py-2">{{$usa->name}}</td>
                        <td class="px-4 py-2">{{$usa->number}}</td>
                        <td class="px-4 py-2">
                <form action="{{url('editContact/'.$usa->id)}}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded 
             active:bg-blue-700" wire:click="selectUser({{$usa->id}})">Edit</button>
                         </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}

   <div class="container mx-auto mt-20 max-w-4xl mx-auto bg-white p-6 rounded shadow-md">
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-semibold">Name</label>
            <input wire:model="name" type="text" id="name" name="name" class="form-input">
            @error('name')
                <small class="text-red-500">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">Save</button>
        </div>
    </form>
   </div>


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
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">EDIT</button>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">DELETE</button>
                    </div>
                </td>
        
            </tr>
            @endforeach
        </tbody>
    </table> 

</div>
