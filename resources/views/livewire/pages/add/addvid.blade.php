<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public $course_id;
    public $course;
    public $ntalevel_id;
    public $ntalevel;
    public $type;
    public $path;
    public $path1;
    public $title;

    public function mount()
    {
        $this->course = \App\Models\Course::pluck('name', 'id')->toArray();
        $this->ntalevel = \App\Models\Ntalevel::pluck('name', 'id')->toArray();
    }



    public function addnta(): void
    {

        $validatedData = $this->validate([
            'course_id' => 'required',
            'ntalevel_id' => 'required',
            'type' => 'required',
            'title' => 'required',
            'path' => $this->type == 1 ? 'required|mimes:mp4,mov,avi,wmv|max:102400' : 'nullable',
            'path1' => $this->type == 2 ? 'required|url' : 'nullable',

        ]);

        $filePath = '';

        if ($this->type == 1 && $this->path) {
            $filePath = $this->path->store('files/video', 'public');
        } elseif ($this->type == 2) {
            $filePath = $this->path1;
        }

        \App\Models\Video::create([
            'title' => $this->title,
            'course_id' => $this->course_id,
            'path' => $filePath,
            'user_id' => auth()->user()->id,
            'ntalevel_id' => $this->ntalevel_id,
            'type' => $this->type,
        ]);

        $this->dispatch('nta-added');
    }
};
?>
<div x-data="{ type: @entangle('type') }">
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Add New Video Materials') }}
            </h2>
        </header>
        <form wire:submit.prevent="addnta">
            <div class="mt-4 mb-4">
                <label for="title">Video Title</label>
                <x-text-input id="title" wire:model.defer="title" class="w-full rounded-lg" />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="mt-4 mb-4">
                    <label for="course_id">Select Course</label>
                    <select id="course_id" wire:model.defer="course_id" class="w-full rounded-lg">
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
                    <select id="ntalevel_id" wire:model.defer="ntalevel_id" class="w-full rounded-lg">
                        <option value="">--Select a Ntalevel--</option>
                        @foreach ($ntalevel as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4 mb-4">
                    <label for="type">Select Video Type</label>
                    <select id="type" wire:model="type" x-on:change="type = $event.target.value" class="w-full rounded-lg">
                        <option value="">--Select a Video Type--</option>
                        <option value={{1}}>Video File</option>
                        <option value={{2}}>YouTube Link</option>
                    </select>
                </div>
                <div class="mt-4 mb-4" x-show="type == 1">
                    <label for="path">Select video file</label>
                    <input id="path" wire:model.defer="path" type="file" class="w-full rounded-lg">
                </div>
                <div class="mt-4 mb-4" x-show="type == 2">
                    <label for="path1">Enter YouTube link</label>
                    <x-text-input id="path1" wire:model.defer="path1" type="text" class="w-full rounded-lg" />
                </div>
            </div>
            <x-errors />
            <div class="flex items-center gap-4">
                <x-primary-button class="w-full justify-center">{{ __('Add') }}</x-primary-button>
                <x-action-message class="me-3" on="nta-added">
                    {{ __('New video was successfully added.') }}
                </x-action-message>
            </div>
        </form>
    </section>
</div>
