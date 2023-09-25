<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="max-w-md mx-auto bg-white rounded p-6 shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Form</h2>
        <form method="POST" action="{{ route('your-route-name') }}"> <!-- Replace 'your-route-name' with the actual route for form submission -->
            @csrf <!-- Add a CSRF token field for security -->
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Name:</label>
                <input type="text" id="name" name="name" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
            </div>
            <div class="mb-4">
                <label for="number" class="block text-gray-600">Number:</label>
                <input type="text" id="number" name="number" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</div>
