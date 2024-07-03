<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component
{
   public $course;

    public function mount()
    {

        $this->course = \App\Models\Course::all();
    }

};
?>

<section class="p-4 grid grid-cols-2 sm:grid-cols-4 gap-4 ">
@foreach($course as $cos)
    @if(\auth()->user()->role_id == 1)
            <a href="{{route('doc2',['course' => $cos->id])}}">
                <div class="border-2 rounded h-10 items-center hover:border-green-500 hover:text-green-500 hover:shadow-xl justify-center flex ">
                    <div>
                        {{$cos->name}}
                    </div>
                </div>
            </a>
    @elseif(\auth()->user()->role_id == 2 )

        @if($cos->id == \auth()->user()->course_id)
                <a href="{{route('doc2',['course' => $cos->id])}}">
                    <div class="border-2 rounded h-10 items-center hover:border-green-500 hover:text-green-500 hover:shadow-xl justify-center flex ">
                        <div>
                            {{$cos->name}}
                        </div>
                    </div>
                </a>

        @endif

    @endif

@endforeach


</section>

