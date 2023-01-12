<div>
    <div class="flex flex-col items-center">
        <div class="flex items-center justify-center gap-4 p-16 mx-auto">
            <input type="number" wire:model="number1" placeholder="Number 1">
            <select class="w-24" wire:model="action">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model="number2" placeholder="Number 2">
            <button 
                wire:click="calculate" 
                class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90{{ $disabled ? ' disabled' : '' }}"
            >
                =
            </button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
