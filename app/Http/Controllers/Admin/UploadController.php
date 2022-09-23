<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataFile;
use Str, Auth, File;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(Request $request)
    {
        $data = DataFile::get();
        return view('admin.content.setting.datafile.index', compact('data'));
    }

    public function create()
    {
        return view('admin.content.setting.datafile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|max:5048',
        ]);

        $page = new DataFile;
        $file = $request->file('thumbnail');
        $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->put('data/file/' . $fileName, File::get($file));
        $filePath   = 'data/file/' . $fileName;
        $page->file = $filePath;
        
        $page->file_name = $request->title;
        $page->inputed_by = Auth::user()->id;
        $page->save();

        return redirect()->route('upload.index')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = DataFile::find($id);
        return view('admin.content.setting.datafile.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'thumbnail' => 'required|max:5048',
        ]);

        $page = DataFile::find($request->id);
        $file = $request->file('thumbnail');
        Storage::disk('public')->delete($page->file);
        $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->put('data/file/' . $fileName, File::get($file));
        $filePath   = 'data/file/' . $fileName;
        $page->file = $filePath;    
    
        $page->file_name = $request->title;
        $page->inputed_by = Auth::user()->id;
        $page->save();

        return redirect()->route('upload.index')->with('message', 'Data berhasil disimpan');
    }

    public function delete($id)
    {
        $page = DataFile::find($id);
        Storage::disk('public')->delete($page->file);
        DataFile::where('id',$id)->delete();
        return redirect()->route('upload.index')->with('message', 'Data berhasil dihapus');
    }
}
