<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'peserta';
    protected $fillable = ['id_peserat', 'nama_peserta', 'alamat', 'no_telp', 'nama_admin'];
}
