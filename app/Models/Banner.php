<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';

    protected $fillable = ['file','title','short_content','url','sort','status'];

    protected $appends = ['file_url','status_label'];

    public function getFileUrlAttribute()
    {
        if($this->file){
            return url(Storage::url($this->file));
        }
        return '';
    }

    public function getStatusLabelAttribute()
    {
        return $this->status == 1 ? 'Active' : 'Inactive';
    }
}
