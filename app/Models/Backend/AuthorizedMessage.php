<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorizedMessage extends Model
{
    use HasFactory;

    public function ChatRoom()
    {
        return $this->belongsTo(ChatRoom::class);
    }
    
    public function Message()
    {
        return $this->belongsTo(Message::class);
    }
}
