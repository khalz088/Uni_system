<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public $course_id;
    public $course;
    public $ntalevel;
    public $ntalevel_id;
    public $path;





    public function mount()
    {
        $this->course = \App\Models\Course::all()->pluck('name', 'id')->toArray();
        $this->ntalevel = \App\Models\Ntalevel::all()->pluck('name', 'id')->toArray();
    }

    public function addnta(): void
    {

        $this->validate([
            'ntalevel_id' => ['required'],
            'course_id' => ['required',],
            'path' => ['required', 'file', 'mimes:pdf,docx,ppt,txt'],
        ]);


        $filePath = $this->path->store('files/documents', 'public');

        \App\Models\Timetable::create([
            'course_id' => $this->course_id,
            'path' => $filePath,
            'user_id' =>\auth()->user()->id,
            'ntalevel_id' => $this->ntalevel_id,
        ]);
        $this->dispatch('nta-added');
    }
};
?>

<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add New Time Table') }}
        </h2>
    </header>
    <form wire:submit.prevent="addnta">
        <div class="mt-4 mb-4">
            <label for="path">Select file</label>
            <input id="path" wire:model="path" type="file" >
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div class="mt-4 mb-4">
                <label for="course_id">Select Course</label>
                <select id="course_id" wire:model="course_id" class="w-full rounded-lg">
                    <option value="">--Select a Course--</option>
                    @foreach ($course as $id => $name)
                        @if(\auth()->user()->role_id == 2)
                            @if(\auth()->user()->course_id == $id)
                            <option value="{{ $id }}">{{ $name }}</option>
                            @endif

                        @else
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endif

                    @endforeach
                </select>
            </div>
            <div class="mt-4 mb-4">
                <label for="ntalevel_id">Select Ntalevel</label>
                <select id="ntalevel_id" wire:model="ntalevel_id" class="w-full rounded-lg">
                    <option value="">--Select a Ntalevel--</option>
                    @foreach ($ntalevel as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <x-errors />
        <div class="flex items-center gap-4">
            <x-primary-button class="w-full justify-center">{{ __('Add ') }}</x-primary-button>
            <x-action-message class="me-3" on="nta-added">
                {{ __('new Timetable was successfully added.') }}
            </x-action-message>
        </div>
    </form>
    <livewire:timetable-table/>
</section>
