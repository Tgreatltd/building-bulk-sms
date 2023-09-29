<div>
    <div x-data="name">
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


   <div class="container mx-auto mt-20 max-w-4xl mx-auto bg-white p-6 rounded shadow-md" x-data="{name:true}">
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
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded" x-on:click="name=!name">EDIT</button>
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


<div class="container mx-auto p-4">
    <form action="" method="POST" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="number" class="block text-gray-600 text-sm font-semibold">Number</label>
            <input type="number" id="number" name="number" class="form-input">
        </div>

        <div class="mb-4">
            <label for="id" class="block text-gray-600 text-sm font-semibold">ID</label>
            <input type="text" id="id" name="id" class="form-input">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
                Save
            </button>
        </div>
    </form>
</div>

</div>
