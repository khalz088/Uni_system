<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component
{
   public $ntalevel;
    public $course_id;
    public function mount(\App\Models\Course $course)
    {

        $this->ntalevel = \App\Models\Ntalevel::all();
        $this->course_id = $course->id;
    }

};
?>

<section class="p-4 grid grid-cols-2 sm:grid-cols-4 gap-4 ">
@foreach($ntalevel as $cos)
        <a href="{{ route('doc3', ['course' => $course_id, 'ntalevel' => $cos->id]) }}">
        <div class="border-2 rounded h-10 items-center :border-green-500 hover:text-green-500 hover:shadow-xl justify-center flex ">
<div>
    {{$cos->name}}
</div>
  </div>
    </a>
@endforeach
</section>

