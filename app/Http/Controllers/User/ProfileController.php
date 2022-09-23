<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;

class ProfileController extends Controller
{
    public function profile()
    {
        $profile = Pages::where('slug','profile-kelurahan')->where('type','profile')->first();
        return view('user.content.profile.profile', compact('profile'));
    }

    public function visi_misi()
    {
        $visimisi = Pages::where('slug','visi-misi')->where('type','profile')->first();
        return view('user.content.profile.visimisi', compact('visimisi'));
    }

    public function struktur()
    {
        $struktur = Pages::where('slug','struktur-pemerintahan')->where('type','profile')->first();
        return view('user.content.profile.struktur', compact('struktur'));
    }

    public function sarpras()
    {
        $sarpras = Pages::where('slug','sarana-prasarana')->where('type','profile')->first();
        return view('user.content.profile.sarpras', compact('sarpras'));
    }
}
