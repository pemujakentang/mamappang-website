<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
