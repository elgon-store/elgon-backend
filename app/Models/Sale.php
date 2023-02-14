<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'book_id',
        'subscriber_id',
        'payment_id',
        'admin_id',
        'amount',
        'currency',
        'status',
    ];
}
