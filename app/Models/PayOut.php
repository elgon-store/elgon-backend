<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'admin_id',
        'account',
        'bank_network',
        'method',
        'reference',
        'notes',
        'amount',
        'currency',
        'status',
    ];

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function authorizer() {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
