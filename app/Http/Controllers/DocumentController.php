<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        return Document::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => ['required', 'integer'],
            'path' => ['required'],
        ]);

        return Document::create($data);
    }

    public function show(Document $document)
    {
        return $document;
    }

    public function update(Request $request, Document $document)
    {
        $data = $request->validate([
            'type' => ['required', 'integer'],
            'path' => ['required'],
        ]);

        $document->update($data);

        return $document;
    }

    public function destroy(Document $document)
    {
        $document->delete();

        return response()->json();
    }
}
