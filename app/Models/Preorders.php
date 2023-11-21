<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preorders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shipment_address',
        'tanggal_pesanan',
        'total_price',
        'total_qty',
        'status'
    ];

    protected $guarded = [
        'id'
    ];
}
