<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use Str, Auth, File;
use Illuminate\Support\Facades\Storage;

class KelurahanController extends Controller
{
    public function index()
    {
        $profile = Pages::where('slug','profile-kelurahan')->where('type','profile')->first();
        if ($profile) {
            return view('admin.content.kelurahan.profile.index', compact('profile'));
        }
        return view('admin.content.kelurahan.profile.create');
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
        if($file = $request->file('file')) {
            $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('pages/file/' . $fileName, File::get($file));
            $filePath   = 'pages/file/' . $fileName;
            $page->file = $filePath;
        }
        $page->title = $request->title;
        $page->short_description = $request->short_description;
        $page->content = $request->content;
        $page->type = 'profile';
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('kelurahan.profile')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $profile = Pages::find($id);
        return view('admin.content.kelurahan.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'nullable',
            'content' => 'required',
            'file' => 'nullable|mimes:jpg,jpeg,png|max:5048',
        ]);

        $page = Pages::find($request->id);
        if($file = $request->file('file')) {
            if($page->file) {
                Storage::disk('public')->delete($page->file);
            }
            $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('pages/file/' . $fileName, File::get($file));
            $filePath   = 'pages/file/' . $fileName;
            $page->file = $filePath;
        }
        $page->title = $request->title;
        $page->short_description = $request->short_description;
        $page->content = $request->content;
        $page->type = 'profile';
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('profilekel.index')->with('message', 'Data berhasil disimpan');
    }
}
