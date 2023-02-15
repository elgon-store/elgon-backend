<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, HasSlug;

    /**
     * Get Options for generating Slugs
     */
    public function getSlugOptions(): SlugOptions {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->skipGenerateWhen(fn () => $this->status === 'draft'); // this will require generateSlug on status change
            // ->doNotGenerateSlugsOnUpdate();
    }

    /**
     * Get the route key for the model
     *
     * @return string
     */
    public function getRouteKeyName(){
        return $this->slug ? 'slug' : 'id';
    }

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

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function sales() {
        return $this->hasMany(Sale::class);
    }

}
