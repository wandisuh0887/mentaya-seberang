<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use Str, Auth, File;
use Illuminate\Support\Facades\Storage;

class KelembagaanController extends Controller
{
    public function index(Request $request)
    {
        $kelembagaan = Pages::where('type','kelembagaan')->get();
        return view('admin.content.kelembagaan.index', compact('kelembagaan'));
    }

    public function create()
    {
        return view('admin.content.kelembagaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'nullable',
            'content' => 'required',
            // 'file' => 'nullable|mimes:jpg,jpeg,png|max:5048',
        ]);

        $page = new Pages;
        $page->title = $request->title;
        $page->short_description = $request->short_description;
        $page->content = $request->content;
        $page->type = 'kelembagaan';
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('kelembagaan.index')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $page = Pages::find($id);
        return view('admin.content.kelembagaan.edit', compact('page'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
            // 'thumbnail' => 'nullable|mimes:jpg,jpeg,png|max:5048',
        ]);

        $page = Pages::find($request->id);
        $page->title = $request->title;
        $page->short_description = $request->short_description;
        $page->content = $request->content;
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('kelembagaan.index')->with('message', 'Data berhasil disimpan');
    }

    public function delete($id)
    {
        Pages::where('id',$id)->delete();
        return redirect()->route('kelembagaan.index')->with('message', 'Data berhasil dihapus');
    }
}
