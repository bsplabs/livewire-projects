<div class="flex items-center justify-center gap-6 p-16">
    <button wire:click="increment" class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">+</button>
    <span>{{ $count }}</span>
    <button wire:click="decrement" class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">-</button>
</div>
