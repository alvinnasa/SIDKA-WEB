<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelayanan extends Model
{
    protected $fillable = [
       'id_layanan',
       'lembaga',
       'pelayanan',
       'keterangan',
       'tgl_pelayanan',
       'id_korban',
    ];
    protected $primaryKey = 'id_layanan';
    public $timestamps = false;
}
