<div class="container mx-auto mt-8">
    <h1 class="text-3xl m-2">SEND EMAIL !! {{$email}}</h1>
    <p class="text-3xl m-2">{{$info}}</p>
    <form wire:submit.prevent="sendMail">
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-semibold">Recipient's Email</label>
            <input type="text"  wire:model="email" class="form-input w-full p-2 border rounded">
            @error('email')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
        </div>

        <div class="mb-4">
            <label for="" class="block text-gray-600 text-sm font-semibold">Subject</label>
            <input wire:model="subject" class="form-input w-full p-2 border rounded">
            @error('subject')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
        </div>

        <div class="mb-4">
            <label for="" class="block text-gray-600 text-sm font-semibold">Message</label>
            <input wire:model="message" class="form-input w-full p-2 border rounded">
            @error('message')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
        </div>

        <div class="mb-4">
            <div wire:target="sendMail" wire:loading wire:attribute.class="block" class="hidden">sending sms......</div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
                Submit
            </button>   
        </div>
    </form>
