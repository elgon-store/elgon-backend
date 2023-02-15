<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'reference',
        'trans_id',
        'amount',
        'currency',
        'method',
        'note',
        'status',
    ];

    public function earnings() {
        return $this->hasMany(Earning::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function sales() {
        return $this->hasMany(Sale::class);
    }

}
