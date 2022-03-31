<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class korban extends Model
{
    protected $fillable = [
        'id_korban',
        'nama_korban',
        'alamat',
        'kecamatan',
        'kabupaten',
        'tgl_lahir',
        'umur',
        'hubungan',
        'pendidikan',
        'jenis_kelamin',
        'id',
    ];
    protected $primaryKey = 'id_korban';
    public $timestamps = false;
}
