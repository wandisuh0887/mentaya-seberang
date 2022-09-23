<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activity';

    protected $fillable = ['title','short_description','content','thumbnail','author','seen_count','type','slug'];

    protected $appends = ['thumbnail_url','author_name'];

    public function getAuthorNameAttribute()
    {
        if($this->author) {
            $data = User::find($this->author);
            return $data?->full_name;
        }
        return '';
    }

    public function getThumbnailUrlAttribute($value)
    {
        if($this->thumbnail){
            return url(Storage::url($this->thumbnail));
        }
        return '';
    }
}
