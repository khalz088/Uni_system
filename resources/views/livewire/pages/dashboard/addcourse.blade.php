<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component
{
    public $department;
    public $department_id;
    public string $name = '';
    /**
     * Delete the currently authenticated user.
     */
    public function mount()
    {
        $this->department = \App\Models\Department::all()->pluck('name', 'id')->toArray();
    }
    public function addnta(): void
    {

        $this->validate([
            'name' => ['required', 'string', 'unique:'.\App\Models\Course::class],
            'department_id' => ['required',]
        ]);

        \App\Models\Course::create([
            'name' => $this->name,
            'department_id' => $this->department_id,
        ]);
        $this->dispatch('nta-added');
    }
}; ?>


<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add New Course') }}
        </h2>

    </header>
    <form wire:submit="addnta">
        <div class="mb-2">
            <x-input-label for="name" :value="__('name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4 mb-4">
            <label for="department_id">Select Course</label>
            <select id="department_id" wire:model="department_id" class="w-full rounded-lg">
                <option value="">--Select a Department--</option>
                @foreach ($department as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>

            <x-input-error :messages="$errors->get('department_id')" class="mt-2" />
        </div>
        <x-errors />
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="nta-added">
                {{ __('new Course was  successfully added.') }}
            </x-action-message>
        </div>
    </form>
</section>
