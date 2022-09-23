<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;

class PemberdayaanController extends Controller
{
    public function detail($slug)
    {
        $page = Pages::where('type','pemberdayaan')->where('slug', $slug)->first();
        return view('user.content.pemberdayaan.detail', compact('page'));
    }
}
