<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use Notifiable;

    const ROLES = [
        'ADMIN' => 'admin',
        'USER' => 'user',
        'HEAD' => 'head',
        'IT' => 'it',
        'HRDGA' => 'hrdga',
    ];

    const STATUS = [
        'ACTIVE' => 1,
        'INACTIVE' => 0,
        'TERMINATED' => 2,
    ];
    const GENDER = [
        'MALE' => 'M',
        'FEMALE' => 'F',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'status', 'createdBy', 'divisi', 'department', 'avatar', 'organisation', 'username', 'gender', 'unpassword',
        'birth',
        'bio',
        'instagram',
        'facebook', 'cover',
        'customerCode',
        'customerName',
        'customerAddress',
        'customerCity',
        'customerPhone',
        'customerEmail',
        'customerWebsite',
        'customerNPWP',
    ];

    protected $hidden = ['password'];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    public function scopeOnlyTelegramId(Builder $query)
    {
        return $query->where('telegram_id', '!=', null);
    }
    public function blog()
    {
        return $this->belongsTo(blog::class, 'id', 'userid');
    }
    /**
     * Enter your own logic (e.g. if ($this->id === 1) to
     *   enable this user to be able to add/edit blog posts
     *
     * @return bool - true = they can edit / manage blog posts,
     *        false = they have no access to the blog admin panel
     */
}
