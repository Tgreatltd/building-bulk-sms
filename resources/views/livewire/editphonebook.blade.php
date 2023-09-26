<div>

    <div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        EDIT PHONEBOOK
    </div>
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Update Form</h2>
        <form > <!-- Replace 'update.route' with your actual update route -->
            @csrf <!-- Add a CSRF token field for security -->
            <div class="mb-4">
                <label for="input1" class="block text-gray-600">ID</label>
                <input disabled type="text" id="input1" wire:model='id' value="{{$user->id}}" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
            </div>
            <div class="mb-4">
                <label for="input2" class="block text-gray-600">NAME</label>
                <input type="text" id="input2" wire:model='name' value="{{$user->name}}" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
            </div>
            <div class="mb-4">
                <label for="input3" class="block text-gray-600">NUMBERS</label>
                <input type="text" id="input3"  wire:model='numbers' value="{{$user->number}}" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</div>
