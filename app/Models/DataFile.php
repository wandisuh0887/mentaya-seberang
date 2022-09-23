<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class DataFile extends Model
{
    use HasFactory;

    protected $table = 'data_files';

    protected $fillable = ['file_name','file','inputed_by'];

    protected $appends = ['file_url','author_name'];

    public function getAuthorNameAttribute()
    {
        if($this->inputed_by) {
            $data = User::find($this->inputed_by);
            return $data?->full_name;
        }
        return '';
    }

    public function getFileUrlAttribute($value)
    {
        if($this->file){
            return url(Storage::url($this->file));
        }
        return '';
    }
}
