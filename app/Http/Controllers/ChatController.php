<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return Chat::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'message' => ['required'],
            'role_id' => ['required', 'integer'],
        ]);

        return Chat::create($data);
    }

    public function show(Chat $chat)
    {
        return $chat;
    }

    public function update(Request $request, Chat $chat)
    {
        $data = $request->validate([
            'message' => ['required'],
            'role_id' => ['required', 'integer'],
        ]);

        $chat->update($data);

        return $chat;
    }

    public function destroy(Chat $chat)
    {
        $chat->delete();

        return response()->json();
    }
}
