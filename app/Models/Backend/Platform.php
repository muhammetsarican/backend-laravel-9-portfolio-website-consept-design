<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    public function Work(){
        return $this->hasMany(Work::class);
    }
    public function category(){
        return $this->belongsTo(PlatformCategory::class);
    }
}
