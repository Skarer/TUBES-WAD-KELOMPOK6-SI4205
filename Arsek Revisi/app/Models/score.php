<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    use HasFactory;
    public $table="scores";
    protected $fillable = ['nis', 'nama', 'mata_pelajaran', 'nilai_uts', 'nilai_uas'];
}
