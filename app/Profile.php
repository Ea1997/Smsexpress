<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function Profile()
    {
        $imagepath=($this->image)   ? $this->image : 'profile/gHVNXva2fk6YBELRLVMBu9Tgw4pb9jlSBUhUReI4.jpeg';
        return  '/storage/' . $imagepath ;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->belongsToMany(Comment::class);
    }
}
