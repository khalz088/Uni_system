<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return Video::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => ['required', 'integer'],
            'path' => ['required'],
        ]);

        return Video::create($data);
    }

    public function show(Video $video)
    {
        return $video;
    }

    public function update(Request $request, Video $video)
    {
        $data = $request->validate([
            'type' => ['required', 'integer'],
            'path' => ['required'],
        ]);

        $video->update($data);

        return $video;
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return response()->json();
    }
}
