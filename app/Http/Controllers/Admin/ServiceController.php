<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use Str, Auth, File;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $service = Pages::where('type','service')->get();
        return view('admin.content.service.index', compact('service'));
    }

    public function create()
    {
        return view('admin.content.service.create');
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
        $page->type = 'service';
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('service.index')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $page = Pages::find($id);
        return view('admin.content.service.edit', compact('page'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $page = Pages::find($request->id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('service.index')->with('message', 'Data berhasil disimpan');
    }

    public function delete($id)
    {
        Pages::where('id',$id)->delete();
        return redirect()->route('service.index')->with('message', 'Data berhasil dihapus');
    }
}
