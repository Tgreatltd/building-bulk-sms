<div class="container mx-auto mt-8">
    <form wire:submit.prevent="sendSms">
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-semibold">Recipient's Number</label>
            <input type="text"  name="number" wire:model="number" class="form-input w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="" class="block text-gray-600 text-sm font-semibold">Sender</label>
            <input wire:model="sender" class="form-input w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="" class="block text-gray-600 text-sm font-semibold">Message</label>
            <input wire:model="message" class="form-input w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <div wire:target="Sendsms" wire:loading wire:attribute.class="block" class="hidden"></div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
                Submit
            </button>
        </div>
    </form>
