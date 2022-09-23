<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;

class ServiceController extends Controller
{
    public function detail($slug)
    {
        $service = Pages::where('slug',$slug)->where('type','service')->first();
        return view('user.content.service.detail', compact('service'));
    }
}
