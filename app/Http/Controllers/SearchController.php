<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FileStorages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SearchController extends Controller
{
    public function index()
    {
        $files = FileStorages::all();
        return view('search', compact('files'));
    }

    public function delete($id)
    {
        $file = FileStorages::findOrFail($id);
        if (Storage::disk('public')->exists($file->path)) {
            Storage::disk('public')->delete($file->path);
        }
        $file->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus.');
    }

    public function download($id) {
        $file = FileStorages::findOrFail($id);
        if (Storage::disk('public')->exists($file->path)) {
            $filename = $file->filename . '.csv';

            return Storage::disk('public')->download($file->path, $filename);
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
    }

    public function getTableData($id)
    {
        // Fetch and return the table data for the given document ID
        $tableData = YourTableModel::where('document_id', $id)->get();
        return response()->json($tableData);
    }

}