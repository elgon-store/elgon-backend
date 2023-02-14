<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'subscriber_id',
        'book_id',
        'payment_id',
        'admin_id',
        'status',
        'expires',
    ];
}
