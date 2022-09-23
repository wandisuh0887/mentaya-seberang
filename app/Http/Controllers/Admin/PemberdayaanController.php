<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use Str, Auth, File;
use Illuminate\Support\Facades\Storage;

class PemberdayaanController extends Controller
{
    public function index(Request $request)
    {
        $pemberdayaan = Pages::where('type','pemberdayaan')->get();
        return view('admin.content.pemberdayaan.index', compact('pemberdayaan'));
    }

    public function create()
    {
        return view('admin.content.pemberdayaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'nullable',
            'content' => 'required',
            'file' => 'nullable|mimes:jpg,jpeg,png|max:5048',
        ]);

        $page = new Pages;
        if($file = $request->file('thumbnail')) {
            $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('pemberdayaan/thumbnail/' . $fileName, File::get($file));
            $filePath   = 'pemberdayaan/thumbnail/' . $fileName;
            $page->file = $filePath;
        }
        $page->title = $request->title;
        $page->short_description = $request->short_description;
        $page->content = $request->content;
        $page->type = 'pemberdayaan';
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('pemberdayaan.index')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $page = Pages::find($id);
        return view('admin.content.pemberdayaan.edit', compact('page'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png|max:5048',
        ]);

        $page = Pages::find($request->id);
        if($file = $request->file('thumbnail')) {
            if($page->thumbnail) { Storage::disk('public')->delete($page->thumbnail); }
            $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('pemberdayaan/thumbnail/' . $fileName, File::get($file));
            $filePath   = 'pemberdayaan/thumbnail/' . $fileName;
            $page->file = $filePath;
        }
        $page->title = $request->title;
        $page->short_description = $request->short_description;
        $page->content = $request->content;
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('pemberdayaan.index')->with('message', 'Data berhasil disimpan');
    }

    public function delete($id)
    {
        $page = Pages::find($id);
        if($page->thumbnail) {
            Storage::disk('public')->delete($page->thumbnail);
        }
        Pages::where('id',$id)->delete();
        return redirect()->route('pemberdayaan.index')->with('message', 'Data berhasil dihapus');
    }
}
