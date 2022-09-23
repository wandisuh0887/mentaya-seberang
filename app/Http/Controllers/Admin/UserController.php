<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
  public function index(Request $request)
  {
      $user = User::orderBy('id','desc')->get();
      return view('admin.content.administrator.user.index', compact('user'));
  }

  public function create(Request $request)
  {
      return view('admin.content.administrator.user.create');
  }

  public function store(Request $request)
  {
      $request->validate([
          'full_name' => 'required',
          'email' => 'required',
          'status' => 'nullable',
          'password' => 'required|min:6',
      ]);

      $filePath = '';
      if($file = $request->file('photo')) {
          $fileName   = strtolower(str_replace(" ","_",$request->full_name)) . '.' . $file->getClientOriginalExtension();
          Storage::disk('public')->put('user/photo/' . $fileName, File::get($file));
          $filePath   = 'user/photo/' . $fileName;
      }

      $data = new User;
      $data->full_name = $request->full_name;
      $data->email = $request->email;
      $data->status = $request->status;
      $data->password = Hash::make($request->password);
      $data->save();

      return redirect()->route('user.index')->with('message','Data berhasil disimpan');
  }

  public function edit($id)
  {
      $user = User::find($id);
      return view('admin.content.administrator.user.edit', compact('user'));
  }

  public function update(Request $request)
  {
      $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'status' => 'nullable',
            'password' => 'nullable|min:6',
      ]);

      $data = User::find($request->id);
      $data->full_name = $request->full_name;
      $data->email = $request->email;
      $data->status = $request->status;
      if($request->password) {
          $data->password = Hash::make($request->password);
      }
      $data->save();

      return redirect()->route('user.index')->with('message','Data berhasil diupdate');
  }

  public function delete(Request $request)
  {
      User::where('id',$request->id)->update(['status' => 0]);
      return redirect()->route('user.index')->with('message','Data berhasil dihapus');
  }


  public function upload(Request $request)
  {
      $filePath = '';
      if($file = $request->file('photo')) {
          $fileName   = strtolower(str_replace(" ","_",$request->full_name)) . '.' . $file->getClientOriginalExtension();
          $data = Storage::disk('public')->put('user/photo/' . $fileName, File::get($file));
          $file_name  = $file->getClientOriginalName();
          $file_type  = $file->getClientOriginalExtension();
          $filePath   = 'user/photo/' . $fileName;

          return $file = [
              'fileName' => $file_name,
              'fileType' => $file_type,
              'filePath' => $filePath,
              'data' => $data,
              'fileSize' => self::fileSize($file)
          ];
      }
  }

  public static function fileSize($file, $precision = 2)
  {
      $size = $file->getSize();
      if ( $size > 0 ) {
          $size = (int) $size;
          $base = log($size) / log(1024);
          $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');
          return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
      }
      return $size;
  }
}
