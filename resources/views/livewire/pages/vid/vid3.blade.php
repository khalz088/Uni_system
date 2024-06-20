<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component
{
   public $semister;
    public $ntalevel;
   public $course_id;
   public $docs;

    public function mount(\App\Models\Course $course  , \App\Models\Ntalevel $ntalevel)
    {

        $this->course_id = $course->id;
        $this->docs = \App\Models\Video::where('course_id', $course->id)->where('ntalevel_id', $ntalevel->id)->get();

    }

};
?>

<section class="p-4 grid grid-cols-1 gap-4 ">


    <hr/>
<div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
    @foreach($docs as $doc)
        @if($doc->type = 1)
            <video width="100%" height="600px" controls>
                <source src="{{ $doc->path }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @else
            <iframe width="100%" height="400px" src="{{ $doc->path }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        @endif
    @endforeach
</div>
</section>

