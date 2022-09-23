<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Str, Auth, File;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $banner = Banner::get();
        return view('admin.content.setting.banner.index', compact('banner'));
    }

    public function create()
    {
        return view('admin.content.setting.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png|max:5048',
            'title' => 'required',
            'short_content' => 'nullable',
            'url' => 'nullable',
            'sort' => 'nullable',
            'status' => 'nullable'
        ]);

        $banner = new Banner;
        if($file = $request->file('file')) {
            $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('banner/' . $fileName, File::get($file));
            $filePath   = 'banner/' . $fileName;
            $banner->file = $filePath;
        }
        $banner->title = $request->title;
        $banner->short_content = $request->short_content;
        $banner->url = $request->url;
        $banner->sort = $request->sort;
        $banner->status = $request->status;
        $banner->save();

        return redirect()->route('banner.index')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.content.setting.banner.edit', compact('banner'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'file' => 'nullable|mimes:jpg,jpeg,png|max:5048',
            'title' => 'required',
            'short_content' => 'nullable',
            'url' => 'nullable',
            'sort' => 'nullable',
            'status' => 'nullable'
        ]);

        $banner = Banner::find($request->id);
        if($file = $request->file('file')) {
            if($banner->file) { 
                Storage::disk('public')->delete($banner->file);
            }
            $fileName   = Str::slug($request->title) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('banner/' . $fileName, File::get($file));
            $filePath   = 'banner/' . $fileName;
            $banner->file = $filePath;
        }
        $banner->title = $request->title;
        $banner->short_content = $request->short_content;
        $banner->url = $request->url;
        $banner->sort = $request->sort;
        $banner->status = $request->status;
        $banner->save();

        return redirect()->route('banner.index')->with('message', 'Data berhasil disimpan');
    }

    public function delete($id)
    {
        $banner = Banner::find($id);
        if($banner->file) {
            Storage::disk('public')->delete($banner->file);
        }
        Banner::where('id',$id)->delete();
        return redirect()->route('banner.index')->with('message', 'Data berhasil dihapus');
    }
}
