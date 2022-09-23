<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use Str, Auth, File;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $activity = Activity::where('type','activity')->get();
        return view('admin.content.activity.index', compact('activity'));
    }

    public function create()
    {
        return view('admin.content.activity.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png|max:5048',
        ]);

        $page = new Activity;
        if($file = $request->file('thumbnail')) {
            $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('activity/thumbnail/' . $fileName, File::get($file));
            $filePath   = 'activity/thumbnail/' . $fileName;
            $page->thumbnail = $filePath;
        }
        $page->title = $request->title;
        $page->short_description = $request->short_description;
        $page->content = $request->content;
        $page->author = Auth::user()->id;
        $page->type = 'activity';
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('activity.index')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $page = Activity::find($id);
        return view('admin.content.activity.edit', compact('page'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png|max:5048',
        ]);

        $page = Activity::find($request->id);
        if($file = $request->file('thumbnail')) {
            if($page->thumbnail) { Storage::disk('public')->delete($page->thumbnail); }
            $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('activity/thumbnail/' . $fileName, File::get($file));
            $filePath   = 'activity/thumbnail/' . $fileName;
            $page->thumbnail = $filePath;
        }
        $page->title = $request->title;
        $page->short_description = $request->short_description;
        $page->content = $request->content;
        $page->author = Auth::user()->id;
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('activity.index')->with('message', 'Data berhasil disimpan');
    }

    public function delete($id)
    {
        $page = Activity::find($id);
        if($page->thumbnail) {
            Storage::disk('public')->delete($page->thumbnail);
        }
        Activity::where('id',$id)->delete();
        return redirect()->route('activity.index')->with('message', 'Data berhasil dihapus');
    }
}
