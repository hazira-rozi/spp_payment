<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
       'nisn',
       'nis',
       'nama_lengkap',
       'id_kelas',
       'alamat',
       'no_telp',
       'id_spp',
    ];
}
