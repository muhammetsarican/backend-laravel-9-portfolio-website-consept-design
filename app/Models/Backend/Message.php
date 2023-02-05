<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function customer_message()
    {
        return $this->hasMany(CustomerMessage::class);
    }
    
    public function authorized_message()
    {
        return $this->hasMany(AuthorizedMessage::class);
    }
}
