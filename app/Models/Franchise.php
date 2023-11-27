<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Franchise extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'user_id',
        'berita',
        'domisili',
        'nama_bisnis',
        'address',
        'keterangan',
        'status',
        'message'
    ];

    protected $guarded = ['id'];

    public function Packages(): BelongsTo{
        return $this->belongsTo(Package::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
