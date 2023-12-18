<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todo';
    protected $fillable= ['nama_kegiatan', 'jadwal_kegiatan', 'keterangan_kegiatan', 'durasi_kegiatan'];
}
