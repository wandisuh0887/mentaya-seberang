<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelembagaan;
use App\Models\KelembagaanDetail;
use App\Models\Pages;

class KelembagaanController extends Controller
{
    public function detail($slug)
    {
        $kelembagaan = Pages::where('slug',$slug)->where('type','kelembagaan')->first();
        return view('user.content.kelembagaan.detail', compact('kelembagaan'));
    }
}
