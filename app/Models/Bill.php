<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'preorders_id',
        'price',
        'shipping',
        'total'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function preorder(): BelongsTo{
        return $this->belongsTo(Preorders::class, 'preorders_id');
    }
}
