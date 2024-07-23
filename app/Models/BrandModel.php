<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    use HasFactory;

    protected $table = 'brand';
    protected $primaryKey = 'id_brand';
    public $timestamps = false;

    protected $fillable = [
    	'kode_brand', 'nama_brand', 'jumlah_produk'
    ];
}