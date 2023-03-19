<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatformCategory extends Model
{
    use HasFactory;
    public function platform(){
        return $this->hasMany(Platform::class);
    }
}
