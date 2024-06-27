<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component
{
    public string $name = '';
    /**
     * Delete the currently authenticated user.
     */
    public function addnta(): void
    {

        $this->validate([
            'name' => ['required', 'string', 'unique:'.\App\Models\Ntalevel::class],
        ]);

      \App\Models\Ntalevel::create([
        'name' => $this->name,
        ]);
        $this->dispatch('nta-added');
    }
}; ?>

<section class="space-y-6">
    <div class="max-w-xl">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add New nta-level') }}
        </h2>

    </header>
    <form wire:submit="addnta">
    <div class="mb-2">
        <x-input-label for="name" :value="__('name')" />
        <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required  />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
        <x-errors />
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="nta-added">
                {{ __('new nta-level was  successfully added.') }}
            </x-action-message>
        </div>
    </form>
    </div>
    <livewire:ntalevel-table/>

</section>
