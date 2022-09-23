<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activity = Activity::where('type','activity')->orderBy('id','desc')->paginate(9);
        return view('user.content.activity.index', compact('activity'));
    }

    public function detail($slug)
    {
        $activity = Activity::where('slug',$slug)->where('type','activity')->first();
        return view('user.content.activity.detail', compact('activity'));
    }
}
