<?php

namespace App\Http\Controllers;

use App\Models\FileStorages;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'filename' => 'required|string|max:255',
            'date' => 'required|date',
            'file' => 'required|mimes:csv,txt|max:30720', // maximum file size 30MB
        ]);

        $file = $request->file('file');
        $filePath = $file->storeAs('uploads', time() . '_' . $file->getClientOriginalName(), 'public');

        FileStorages::create([
            'filename' => $request->filename,
            'path' => $filePath,
            'date' => $request->date,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'File berhasil diunggah!');
    }
}