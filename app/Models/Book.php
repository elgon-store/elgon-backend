<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'desc',
        'summary',
        'cover',
        'cover_alt',
        'cover_other',
        'document',
        'price',
        'currency',
        'category_id',
        'genre_id',
        'author_id',
        'admin_id',
        'status',
        'admin_status',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function approver() {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function bookmarks() {
        return $this->hasMany(Bookmark::class);
    }

    public function earningsMade() {
        return $this->hasMany(Earning::class);
    }

    public function favorites() {
        return $this->hasMany(Favorite::class);
    }

    public function books() {
        return $this->hasMany(Payment::class);
    }

}
