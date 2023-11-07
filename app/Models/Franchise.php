<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'berita',
        'domisili',
        'nama_bisnis',
        'address',
        'keterangan',
        'status'
    ];

    protected $guarded = ['id'];
}
