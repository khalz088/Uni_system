<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;



new #[Layout('layouts.app')] class extends Component
{
    public $courses;
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $role_id = '';

    public $course_id;

    /**
     * Handle an incoming registration request.
     */

    public function mount()
    {
        $this->courses = \App\Models\Course::all()->pluck('name', 'id')->toArray();

    }

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'course_id' => ['required'],
            'role_id' => ['required'],

        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        $this->dispatch('nta-added');


    }
}; ?>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add New user') }}
        </h2>

    </header>
    <form wire:submit="register" >
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">


        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"  autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!--course --->
        <div class="mt-4">
            <label for="course_id">Select Course</label>
            <select id="course_id" wire:model="course_id" class="w-full rounded-lg">
                <option value="">--Select a course--</option>
                @foreach ($courses as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('course_id')" class="mt-2" />
        </div>

        <div class="mt-4">
            <label for="course_id">Select Role</label>
            <select id="course_id" wire:model="role_id" class="w-full rounded-lg">
                <option value="">--Select a Role--</option>
                <option value="{{1}}">Admin</option>
                <option value="{{2}}">Lecture</option>
            </select>
            <x-input-error :messages="$errors->get('role_id')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-inputs.password wire:model="password" id="password" class="block mt-1 w-full"
                               type="password"
                               name="password"
                                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation"  autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        </div>
        <div class="flex mt-4 items-center gap-4">
            <x-primary-button class="w-full justify-center flex">{{ __('Save') }}</x-primary-button>

        </div>
        <x-action-message class="me-3" on="nta-added">
            {{ __('user was success added .') }}
        </x-action-message>
    </form>
</section>

        </div>
    </div>
</div>
