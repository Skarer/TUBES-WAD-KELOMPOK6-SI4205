<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    public $table="courses";
    protected $fillable = ['kelas', 'hari', 'jam_mulai', 'jam_selesai', 'mata_pelajaran'];
}
