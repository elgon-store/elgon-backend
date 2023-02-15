<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        'photo',
        'title',
        'bio',
        'role',
        'status',
        'balance',
        'currency',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Ordinary User Area
     */
    public function bookmarks() {
        return $this->hasMany(Bookmark::class);
    }
    public function earningsMadeBySubscriber() {
        return $this->hasMany(Earning::class, 'subscriber_id');
    }
    public function favorites() {
        return $this->hasMany(Favorite::class);
    }
    public function interests() {
        return $this->hasMany(Interest::class);
    }
    public function payments() {
        return $this->hasMany(Payment::class);
    }
    public function purchases() {
        return $this->hasMany(Sale::class, 'subscriber_id');
    }
    public function subscriptions() {
        return $this->hasMany(Subscription::class, 'subscriber_id');
    }

    /**
     * Author Area
     */

    public function booksAuthored(){
        return $this->hasMany(Book::class, 'author_id');
    }
    public function earningsMadeByAuthor() {
        return $this->hasMany(Earning::class, 'author_id');
    }
    public function payouts() {
        return $this->hasMany(PayOut::class, 'author_id');
    }
    public function sales() {
        return $this->hasMany(Sale::class, 'author_id');
    }
    public function subscriptionsAuthored() {
        return $this->hasMany(Subscription::class, 'author_id');
    }

    /**
     * Admin Area
     */

    public  function payoutsAuthorized() {
        return $this->hasMany(PayOut::class, 'admin_id');
    }
    public function salesVerified() {
        return $this->hasMany(Sale::class, 'admin_id');
    }
    public function subscriptionsVerified() {
        return $this->hasMany(Subscription::class, 'admin_id');
    }
    public function booksApproved(): HasMany{
        return $this->hasMany(Book::class, 'admin_id');
    }
    public function earningsVerified() {
        return $this->hasMany(Earning::class, 'admin_id');
    }

}
