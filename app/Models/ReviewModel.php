<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    use HasFactory;

    protected $table = 'review';
    protected $primaryKey = 'id_review';
    public $timestamps = false;

    protected $fillable = [
    	'kode_review', 'nama', 'review', 'asal', 'foto'
    ];
}