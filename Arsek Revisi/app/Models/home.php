<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
    public $table="users";
    protected $fillable = ['name', 'nis', 'ttl', 'alamat', 'email', 'email_verified_at', 'password'];
}
