<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'menu_id', 'qty'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function menu():BelongsTo{
        return $this->belongsTo(Menu::class);
    }
}
