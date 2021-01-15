<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attedance extends Model
{
    use HasFactory;
    public $table="attedances";
    protected $fillable = ['nis', 'nama', 'kelas', 'tanggal', 'mata_pelajaran','absen'];
}
