<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage()
    {
        $imagepath=($this->image)   ? $this->image : 'profile/gHVNXva2fk6YBELRLVMBu9Tgw4pb9jlSBUhUReI4.jpeg';
        return  '/storage/' . $imagepath ;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment_user(){
        return $this->belongsToMany(CommentsUsers::class);
    }
}
