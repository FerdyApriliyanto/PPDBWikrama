<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIS', 'Nama','Jns_kelamin','Temp_lahir','Tgl_lahir','Alamat','Asal_sekolah','Kelas','Jurusan'
    ];
}
