<?php

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Activity;
use App\Models\ProfileKelurahan;
use App\Models\Visitor;

if(! function_exists('prefixActive')){
	function prefixActive($prefixName)
	{
		$prefix = explode('/', request()->route()->getPrefix());
		return $prefixName == $prefix[1] ? 'active' : '';
	}
}

if(! function_exists('prefixBlock')){
	function prefixBlock($prefixName)
	{
		$prefix = explode('/', request()->route()->getPrefix());
		return $prefixName == $prefix[1] ? 'menu-open' : '';
	}
}

if(! function_exists('routeActive')){
	function routeActive($routeName)
	{
		$url = explode('.', Route::currentRouteName());
		return $url[0] == $routeName ? 'active' : '';
	}
}

if(! function_exists('listMenu')){
	function listMenu($type)
	{
		$menus = Pages::select('id','title','slug')->where('type', $type)->get();
		return $menus;
	}
}

if(! function_exists('recentPost')){
	function recentPost($type)
	{
		$pages = Activity::where('type', $type)->orderBy('id','desc')->limit(2)->get();
		return $pages;
	}
}

if(! function_exists('profile')){
	function profile()
	{
		$profile = ProfileKelurahan::first();
		return $profile;
	}
}

// User Page
if(! function_exists('prefixActiveUser')){
	function prefixActiveUser($prefixName)
	{
		$route = explode('.', Route::currentRouteName());
		return $prefixName == $route[0] ? 'active' : Route::currentRouteName();
	}
}

if(! function_exists('blockActiveUser')){
	function blockActiveUser($prefixName)
	{
		$route = explode('.', Route::currentRouteName());
		return $prefixName == $route[0] ? 'active' : Route::currentRouteName();
	}
}

// visitor
if(! function_exists('visitors')){
	function visitors()
	{
		$data = Visitor::count();
		return $data;
	}
}
