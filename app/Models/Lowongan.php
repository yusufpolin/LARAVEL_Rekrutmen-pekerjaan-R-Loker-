<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    /**
     * Tabel terkait dengan model ini.
     *
     * @var string
     */
    protected $table = 'lowongans';

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'nama_pekerjaan',
        'deskripsi',
    ];
}
