<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component
{
    public $messages = [];
    public $newMessage;
    public $selectedRole = 0; // Default to Course Group
    public $selectedGroupName = 'Course Group';

    public function mount()
    {
        $this->loadMessages();
    }

    public function loadMessages()
    {
        $this->messages = \App\Models\Chat::where('course_id', Auth::user()->course_id)
            ->where('ntalevel_id', Auth::user()->ntalevel_id)
            ->where('role_id', $this->selectedRole)
            ->get();
    }

    public function selectGroup($role, $groupName)
    {
        $this->selectedRole = $role;
        $this->selectedGroupName = $groupName;
        $this->loadMessages();
    }

    public function sendMessage()
    {
        \App\Models\Chat::create([
            'message' => $this->newMessage,
            'user_id' => Auth::user()->id,
            'ntalevel_id' => Auth::user()->ntalevel_id,
            'course_id' => Auth::user()->course_id,
            'role_id' => $this->selectedRole,
        ]);

        $this->newMessage = '';
        $this->loadMessages();
    }

    public function loadNewMessages()
    {
        $this->loadMessages();
    }
};
?>

<section class="h-screen flex">
    <!-- Sidebar -->
    <div class="w-1/4 bg-white border-r border-gray-200 overflow-y-auto">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-700">Chats</h2>
            <ul class="mt-2">
                <li class="flex items-center gap-2 p-2 hover:bg-gray-100 cursor-pointer" wire:click="selectGroup(0, 'Course Group')">
                    <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="6" r="4" stroke="#337915" stroke-width="1.5"></circle>
                        <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#337915" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg>
                    <span class="text-gray-800">Course Group</span>
                </li>

                @if(\auth()->user()->role_id == 1)
                    <li class="flex items-center gap-2 p-2 hover:bg-gray-100 cursor-pointer" wire:click="selectGroup(1, 'Department Group')">
                        <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="6" r="4" stroke="#337915" stroke-width="1.5"></circle>
                            <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#337915" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <span class="text-gray-800">Department Group</span>
                    </li>
                    <li class="flex items-center gap-2 p-2 hover:bg-gray-100 cursor-pointer" wire:click="selectGroup(2, 'Lecture Group')">
                        <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="6" r="4" stroke="#337915" stroke-width="1.5"></circle>
                            <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#337915" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <span class="text-gray-800">Lecture Group</span>
                    </li>
                    <li class="flex items-center gap-2 p-2 hover:bg-gray-100 cursor-pointer" wire:click="selectGroup(3, 'HOD Group')">
                        <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="6" r="4" stroke="#337915" stroke-width="1.5"></circle>
                            <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#337915" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <span class="text-gray-800">HOD Group</span>
                    </li>
                @elseif(\auth()->user()->role_id == 2)
                    <li class="flex items-center gap-2 p-2 hover:bg-gray-100 cursor-pointer" wire:click="selectGroup(2, 'Lecture Group')">
                        <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="6" r="4" stroke="#337915" stroke-width="1.5"></circle>
                            <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#337915" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <span class="text-gray-800">Lecture Group</span>
                    </li>

                @endif

            </ul>
        </div>
    </div>

    <!-- Main chat area -->
    <div class="flex-1 flex flex-col">
        <div class="py-2 px-3 bg-grey-lighter border-b-2  flex flex-row justify-between items-center">
            <div class="flex items-center">
                <div>
                    <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="6" r="4" stroke="#337915" stroke-width="1.5"></circle>
                        <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#337915" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-grey-darkest">
                        {{ $selectedGroupName }}
                    </p>
                </div>
            </div>
        </div>
        <!-- Chat messages -->
        <div class="flex-1 overflow-y-auto max-h-[70vh] p-4" wire:poll.1s="loadNewMessages">
            @foreach($messages as $chat)
                @if($chat->user_id == auth()->user()->id)
                    <div class="flex justify-end mb-4">
                        <div class="bg-green-800 text-white p-3 rounded-lg max-w-xs">
                            <div class="text-sm font-semibold">You</div>
                            <div class="text-sm">{{$chat->message}}</div>
                            <div class="text-xs text-gray-300">{{ \Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</div>
                        </div>
                    </div>
                @else
                    <div class="flex justify-start mb-4">
                        <div class="bg-indigo-500 text-white p-3 rounded-lg max-w-xs">
                            <div class="text-sm font-semibold">{{$chat->user->name}}</div>
                            <div class="text-sm">{{$chat->message}}</div>
                            <div class="text-xs text-gray-300">{{ \Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Message input area -->
        <form wire:submit.prevent="sendMessage" class="p-4 border-t border-gray-200 bg-white">
            <div class="flex items-center gap-2">
                <input class="flex-1 p-2 rounded-full border border-gray-300 focus:outline-none" wire:model="newMessage" name="message" placeholder="Type a message...">
                <button type="submit" class="flex items-center bg-green-600 text-white p-2 rounded-full shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g id="Send 01">
                            <path id="icon" d="M9.04071 6.959L6.54227 9.45744M6.89902 10.0724L7.03391 10.3054C8.31034 12.5102 8.94855 13.6125 9.80584 13.5252C10.6631 13.4379 11.0659 12.2295 11.8715 9.81261L13.0272 6.34566C13.7631 4.13794 14.1311 3.03408 13.5484 2.45139C12.9657 1.8687 11.8618 2.23666 9.65409 2.97257L6.18714 4.12822C3.77029 4.93383 2.56187 5.33664 2.47454 6.19392C2.38721 7.0512 3.48957 7.68941 5.69431 8.96584L5.92731 9.10074C6.23326 9.27786 6.38623 9.36643 6.50978 9.48998C6.63333 9.61352 6.72189 9.7665 6.89902 10.0724Z" stroke="white" stroke-width="1.6" stroke-linecap="round"/>
                        </g>
                    </svg>
                    <span class="ml-2">Send</span>
                </button>
            </div>
        </form>
    </div>
</section>

