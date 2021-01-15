<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    public $table="events";
    protected $fillable = ['nama', 'deskripsi', 'kategori','tanggal','jam_mulai', 'jam_berakhir', 'tempat'];
}
