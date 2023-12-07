<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PreorderDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'preorders_id',
        'menu_id',
        'qty'
    ];

    protected $guarded = [
        'id'
    ];

    public function preorder(): BelongsTo{
        return $this->belongsTo(Preorders::class);
    }

    public function menu(): BelongsTo{
        return $this->belongsTo(Menu::class);
    }
}
