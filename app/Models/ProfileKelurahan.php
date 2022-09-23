<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProfileKelurahan extends Model
{
    use HasFactory;

    protected $table = 'profile_kelurahan';

    protected $fillable = ['nama_kades','foto_kades','sambutan_kades','foto_kelurahan','profile_singkat','jumlah_penduduk_pria','jumlah_penduduk_wanita','jumlah_kk', 'email', 'telepon','jam_operasonal'];

    protected $appends = ['foto_kades_url','foto_kelurahan_url'];

    public function getFotoKadesUrlAttribute()
    {
        if($this->foto_kades){
            return url(Storage::url($this->foto_kades));
        }
        return '';
    }

    public function getFotoKelurahanUrlAttribute()
    {
        if($this->foto_kelurahan){
            return url(Storage::url($this->foto_kelurahan));
        }
        return '';
    }
}
