<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranMahasiswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pendaftaran';
    protected $table = 'pendaftaran_mahasiswa';
    protected $fillable = ['nama_lengkap', 'jenis_kelamin', 'jurusan', 'no_telp', 'asal_sekolah', 'id_gelombang', 'status_pendaftaran'];
}