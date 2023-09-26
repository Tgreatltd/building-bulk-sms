<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container mx-auto mt-8 max-w-4xl mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Form</h2>
        <form wire:submit.prevent="saveContact"> <!-- Replace 'your-route-name' with the actual route for form submission -->
            @csrf <!-- Add a CSRF token field for security -->
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Name:</label>
                <input type="text" id="name"  wire:model="name" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
                @error('name')
                   <small class="text-red-500">{{$message}}</small> 
                @enderror
            </div>
            <div class="mb-4">
                <label for="number" class="block text-gray-600">Number:</label>
                <input type="text" id="number"  wire:model="number" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400 py-20">
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
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-700">EDIT</button>
        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>
