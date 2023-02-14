<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'photo',
        'desc',
        'status',
    ];

    public function books() {
        return $this->hasMany(Book::class);
    }

    public function interests() {
        return $this->hasMany(Interest::class);
    }

}
