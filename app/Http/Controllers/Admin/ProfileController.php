<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileKelurahan;
use Illuminate\Support\Facades\Storage;
use File;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = ProfileKelurahan::first();
        if($profile) {
            return view('admin.content.setting.profile.edit', compact('profile'));
        }else {
            return view('admin.content.setting.profile.show', compact('profile'));
        }
    }

    public function store(Request $request)
    {
        if($request->type == 'new') {
            $request->validate([
                'nama_kades' => 'required',
                'foto_kades' => 'required|mimes:jpg,jpeg,png',
                'sambutan_kades' => 'required',
                'foto_kelurahan' => 'required|mimes:jpg,jpeg,png|max:5048',
                'profile_singkat' => 'required',
                'jumlah_penduduk_pria' => 'required',
                'jumlah_penduduk_wanita' => 'required',
                'jumlah_kk' => 'required',
                'email' => 'required',
                'telepon' => 'required',
                'jam_operasional' => 'required',
            ]);
            $profile = new ProfileKelurahan;
            if($foto_kades = $request->file('foto_kades')) {
                $fileName   = 'foto-kades_' . date('YmdHis') . '.' . $foto_kades->getClientOriginalExtension();
                Storage::disk('public')->put('profile/' . $fileName, File::get($foto_kades));
                $foto_kades   = 'profile/' . $fileName;
                $profile->foto_kades = $foto_kades;
            }
            if($foto_kelurahan = $request->file('foto_kelurahan')) {
                $fileName   = 'foto-kelurahan_' . date('YmdHis') . '.' . $foto_kelurahan->getClientOriginalExtension();
                Storage::disk('public')->put('profile/' . $fileName, File::get($foto_kelurahan));
                $foto_kelurahan   = 'profile/' . $fileName;
                $profile->foto_kelurahan = $foto_kelurahan;
            }
        }else {
            $request->validate([
                'nama_kades' => 'required',
                'foto_kades' => 'nullable|mimes:jpg,jpeg,png',
                'sambutan_kades' => 'required',
                'foto_kelurahan' => 'nullable|mimes:jpg,jpeg,png|max:5048',
                'profile_singkat' => 'required',
                'jumlah_penduduk_pria' => 'required',
                'jumlah_penduduk_wanita' => 'required',
                'jumlah_kk' => 'required',
                'email' => 'required',
                'telepon' => 'required',
                'jam_operasional' => 'required',
            ]);
            $profile = ProfileKelurahan::find($request->id);
            if($foto_kades = $request->file('foto_kades')) {
                if($profile->foto_kades) {
                    Storage::disk('public')->delete($profile->foto_kades);
                }
                $fileName   = 'foto-kades_' . date('YmdHis') . '.' . $foto_kades->getClientOriginalExtension();
                Storage::disk('public')->put('profile/' . $fileName, File::get($foto_kades));
                $foto_kades   = 'profile/' . $fileName;
                $profile->foto_kades = $foto_kades;
            }
            if($foto_kelurahan = $request->file('foto_kelurahan')) {
                if($profile->foto_kelurahan) {
                    Storage::disk('public')->delete($profile->foto_kelurahan);
                }
                $fileName   = 'foto-kelurahan_' . date('YmdHis') . '.' . $foto_kelurahan->getClientOriginalExtension();
                Storage::disk('public')->put('profile/' . $fileName, File::get($foto_kelurahan));
                $foto_kelurahan   = 'profile/' . $fileName;
                $profile->foto_kelurahan = $foto_kelurahan;
            }
        }
        
        $profile->nama_kades = $request->nama_kades;
        $profile->sambutan_kades = $request->sambutan_kades;
        $profile->profile_singkat = $request->profile_singkat;
        $profile->jumlah_penduduk_pria = $request->jumlah_penduduk_pria;
        $profile->jumlah_penduduk_wanita = $request->jumlah_penduduk_wanita;
        $profile->jumlah_kk = $request->jumlah_kk;
        $profile->email = $request->email;
        $profile->telepon = $request->telepon;
        $profile->jam_operasional = $request->jam_operasional;
        $profile->save();

        return redirect()->route('profile.index')->with('message','Data berhasil disimpan');
    }
}
