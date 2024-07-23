<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AplikasiModel extends Model
{
    use HasFactory;

    protected $table = 'aplikasi';
    protected $primaryKey = 'id_aplikasi';
    public $timestamps = false;

    protected $fillable = [
    	'kode_aplikasi', 'nama_aplikasi', 'pemilik', 'alamat'
    ];
}