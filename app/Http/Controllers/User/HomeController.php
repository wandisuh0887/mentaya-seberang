<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Visitor;
use App\Models\ProfileKelurahan;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $visitor = Visitor::where('ip_address', request()->ip())->where('insert_date', date('Y-m-d'))->first();
        if(!$visitor) {
            $visitor = new Visitor;
            $visitor->ip_address = request()->ip();
            $visitor->insert_date = date('Y-m-d');
            $visitor->save();
        }
        $banner = Banner::where('status', 1)->orderBy('sort','asc')->get();
        $activity = Activity::where('type','activity')->orderBy('id','desc')->limit(6)->get();
        $profile = ProfileKelurahan::first();
        return view('user.content.home.index', compact('banner','activity','profile'));
    }
}
