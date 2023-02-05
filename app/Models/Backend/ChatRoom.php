<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    public function CustomerMessage()
    {
        return $this->hasMany(CustomerMessage::class);
    }
    
    public function AuthorizedMessage()
    {
        return $this->hasMany(AuthorizedMessage::class);
    }

    // public function images()
    // {
    //     return $this->belongsTo(Image::class);
    // }
}
