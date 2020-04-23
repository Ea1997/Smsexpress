<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Rent;
use App\Comment;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'Pname',
        'telephone',
        'Adresse',
        'CIN',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected static function boot()
    {
        parent::boot();
        static::created(
            function($user){
                $user->profile()->create([

                    'user_id'=>$user->id,
                    'image'=>$user->id,
                ]);


            }
        );
    }
    public function item()
    {
        return $this->hasMany(Item::class)->orderBy('created_at','DESC');

    }
    public function comments()
    {
        return $this->hasMany(Comment::class);

    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
