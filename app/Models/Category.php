<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HasSlug;

    /**
     * Get Options for generating Slugs
     */
    public function getSlugOptions(): SlugOptions {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model
     *
     * @return string
     */
    public function getRouteKeyName(){
        return 'slug';
    }

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

    public function genres() {
        return $this->hasMany(Genre::class);
    }

}
