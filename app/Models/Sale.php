<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'author_id',
        'subscriber_id',
        'admin_id',
        'payment_id',
        'amount',
        'currency',
        'status',
    ];

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function bookAuthor() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function bookSubscriber() {
        return $this->belongsTo(User::class, 'subscriber_id');
    }

    public function verifier() {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function payment() {
        return $this->belongsTo(Payment::class);
    }
}
