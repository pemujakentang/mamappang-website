<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'price', 'image'];

    public function franchises(): HasMany{
        return $this->hasMany(Franchise::class);
    }
}
