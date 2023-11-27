<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = ['preorder_id', 'service_provider', 'driver', 'plat', 'no_hp', 'link', 'keterangan'];

    protected $guarded = ['id'];

    public function preorder(): BelongsTo{
        return $this->belongsTo(Preorders::class);
    }
}
