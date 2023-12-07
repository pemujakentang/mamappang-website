<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'preorders_id', 'keterangan', 'image', 'status'];

    protected $guarded = ['id'];

    public function preorder(): BelongsTo{
        return $this->belongsTo(Preorders::class, 'preorder_id');
    }
}
