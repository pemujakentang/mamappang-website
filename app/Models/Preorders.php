<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function details(): HasMany{
        return $this->hasMany(PreorderDetails::class);
    }

    public function shipment():HasOne{
        return $this->hasOne(Shipment::class);
    }
}
