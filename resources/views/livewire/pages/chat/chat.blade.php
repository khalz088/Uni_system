<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component
{
    public $messages = [];
    public $newMessage;

    public function mount()
    {
        $this->messages = \App\Models\Chat::where('course_id', Auth::user()->course_id)
            ->where('ntalevel_id', Auth::user()->ntalevel_id)
            ->where('role_id', 0)
            ->get();
    }

    public function sendMessage()
    {
        \App\Models\Chat::create([
            'message' => $this->newMessage,
            'user_id' => Auth::user()->id,
            'ntalevel_id' => Auth::user()->ntalevel_id,
            'course_id' => Auth::user()->course_id,
            'role_id' => 0,
        ]);

        $this->newMessage = '';

    }

    public function loadNewMessages()
    {
        $this->messages = \App\Models\Chat::where('course_id', Auth::user()->course_id)
            ->where('ntalevel_id', Auth::user()->ntalevel_id)
            ->where('role_id', 0)
            ->get();
    }
};
?>

<section class="pt-4">
    <div class="w-full h-[78vh] overflow-x-auto" wire:poll.1s="loadNewMessages">
        @foreach($messages as $chat)
            @if($chat->user_id == \auth()->user()->id)
                <div class="flex gap-2.5 justify-end mr-2 sm:mr-4">
                    <div class="">
                        <div class="grid mb-2">
                            <h5 class="text-right text-gray-900 text-sm font-semibold leading-snug pb-1">You</h5>
                            <div class="">
                                <h2 class="text-white p-2 rounded bg-green-600 w-80 text-sm font-normal  leading-snug">{{$chat->message}}</h2>
                            </div>
                            <div class="justify-start items-center inline-flex">
                                <h3 class="text-gray-500 text-xs font-normal leading-4 py-1">{{ \Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="grid">
                    <div class="flex gap-2.5 sm:ml-4 ml-2 mb-2">
                        <div class="grid">
                            <h5 class="text-gray-900  text-sm font-semibold leading-snug pb-1">{{$chat->user->name}}</h5>
                            <div class="w-max grid">
                                <div class=" justify-start items-center gap-3 inline-flex">
                                    <h5 class="text-white p-2 rounded w-80 bg-indigo-500 text-sm font-normal leading-snug">{{$chat->message}}</h5>
                                </div>
                                <div class="justify-end items-center inline-flex mb-2.5">
                                    <h6 class="text-gray-500 text-xs font-normal leading-4 py-1">{{ \Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <form wire:submit.prevent="sendMessage">
        <div class="w-full pl-3 pr-1 py-1 rounded-3xl border border-gray-200 items-center gap-2 inline-flex">
            <div class="flex w-full items-center gap-2">
                <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <circle cx="12" cy="6" r="4" stroke="#337915" stroke-width="1.5"></circle>
                        <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#337915" stroke-width="1.5" stroke-linecap="round"></path>
                    </g>
                </svg>
                <input class="w-full rounded text-black leading-4 focus:outline-none" wire:model="newMessage" name="message" placeholder="Type here...">
            </div>
            <div class="flex items-center gap-2">
                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <g id="Attach 01">
                        <g id="Vector">
                            <path d="M14.9332 7.79175L8.77551 14.323C8.23854 14.8925 7.36794 14.8926 6.83097 14.323C6.294 13.7535 6.294 12.83 6.83097 12.2605L12.9887 5.72925M12.3423 6.41676L13.6387 5.04176C14.7126 3.90267 16.4538 3.90267 17.5277 5.04176C18.6017 6.18085 18.6017 8.02767 17.5277 9.16676L16.2314 10.5418M16.8778 9.85425L10.72 16.3855C9.10912 18.0941 6.49732 18.0941 4.88641 16.3855C3.27549 14.6769 3.27549 11.9066 4.88641 10.198L11.0441 3.66675" stroke="#9CA3AF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M14.9332 7.79175L8.77551 14.323C8.23854 14.8925 7.36794 14.8926 6.83097 14.323C6.294 13.7535 6.294 12.83 6.83097 12.2605L12.9887 5.72925M12.3423 6.41676L13.6387 5.04176C14.7126 3.90267 16.4538 3.90267 17.5277 5.04176C18.6017 6.18085 18.6017 8.02767 17.5277 9.16676L16.2314 10.5418M16.8778 9.85425L10.72 16.3855C9.10912 18.0941 6.49732 18.0941 4.88641 16.3855C3.27549 14.6769 3.27549 11.9066 4.88641 10.198L11.0441 3.66675" stroke="black" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M14.9332 7.79175L8.77551 14.323C8.23854 14.8925 7.36794 14.8926 6.83097 14.323C6.294 13.7535 6.294 12.83 6.83097 12.2605L12.9887 5.72925M12.3423 6.41676L13.6387 5.04176C14.7126 3.90267 16.4538 3.90267 17.5277 5.04176C18.6017 6.18085 18.6017 8.02767 17.5277 9.16676L16.2314 10.5418M16.8778 9.85425L10.72 16.3855C9.10912 18.0941 6.49732 18.0941 4.88641 16.3855C3.27549 14.6769 3.27549 11.9066 4.88641 10.198L11.0441 3.66675" stroke="black" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </g>
                </svg>
                <button type="submit" class="items-center flex px-3 py-2 bg-green-600 rounded-full shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g id="Send 01">
                            <path id="icon" d="M9.04071 6.959L6.54227 9.45744M6.89902 10.0724L7.03391 10.3054C8.31034 12.5102 8.94855 13.6125 9.80584 13.5252C10.6631 13.4379 11.0659 12.2295 11.8715 9.81261L13.0272 6.34566C13.7631 4.13794 14.1311 3.03408 13.5484 2.45139C12.9657 1.8687 11.8618 2.23666 9.65409 2.97257L6.18714 4.12822C3.77029 4.93383 2.56187 5.33664 2.47454 6.19392C2.38721 7.0512 3.48957 7.68941 5.69431 8.96584L5.92731 9.10074C6.23326 9.27786 6.38623 9.36643 6.50978 9.48998C6.63333 9.61352 6.72189 9.7665 6.89902 10.0724Z" stroke="white" stroke-width="1.6" stroke-linecap="round"/>
                        </g>
                    </svg>
                    <h3 class="text-white text-xs font-semibold leading-4 px-2">Send</h3>
                </button>
            </div>
        </div>
    </form>
</section>

