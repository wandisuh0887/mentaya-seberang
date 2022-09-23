<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Pages extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = ['title','short_description','content','file','type','slug'];

    protected $appends = ['file_url'];

    public function getFileUrlAttribute($value)
    {
        if($this->file){
            return url(Storage::url($this->file));
        }
        return '';
    }

}
