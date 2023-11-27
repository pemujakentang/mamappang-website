<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PreorderDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'preorder_id',
        'item_id',
        'qty'
    ];

    protected $guarded = [
        'id'
    ];

    public function preorder(): BelongsTo{
        return $this->belongsTo(Preorders::class);
    }
}
