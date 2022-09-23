<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use Str, Auth, File;
use Illuminate\Support\Facades\Storage;

class SarprasController extends Controller
{
    public function index()
    {
        $sarpras = Pages::where('slug','sarana-prasarana')->where('type','profile')->first();
        if ($sarpras) {
            return view('admin.content.kelurahan.sarpras.index', compact('sarpras'));
        }
        return view('admin.content.kelurahan.sarpras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $page = new Pages;
        $page->title = $request->title;
        $page->content = $request->content;
        $page->type = 'profile';
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('sarpras.index')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $sarpras = Pages::find($id);
        return view('admin.content.kelurahan.sarpras.edit', compact('sarpras'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $page = Pages::find($request->id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('sarpras.index')->with('message', 'Data berhasil disimpan');
    }
}
