<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMessage extends Model
{
    use HasFactory;

    public function chat_room()
    {
        return $this->belongsTo(ChatRoom::class);
    }
    
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
