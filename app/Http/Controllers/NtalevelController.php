<?php

namespace App\Http\Controllers;

use App\Models\Ntalevel;
use Illuminate\Http\Request;

class NtalevelController extends Controller
{
    public function index()
    {
        return Ntalevel::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        return Ntalevel::create($data);
    }

    public function show(Ntalevel $ntalevel)
    {
        return $ntalevel;
    }

    public function update(Request $request, Ntalevel $ntalevel)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        $ntalevel->update($data);

        return $ntalevel;
    }

    public function destroy(Ntalevel $ntalevel)
    {
        $ntalevel->delete();

        return response()->json();
    }
}
