<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelaku extends Model
{
    protected $fillable = [
        'nama_pelaku',
        'alamat',
        'id',
       
    ];
    protected $primaryKey = 'id_pelaku';
    public $timestamps = false;
}
