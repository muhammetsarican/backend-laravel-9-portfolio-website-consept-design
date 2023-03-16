<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryWork extends Model
{
    use HasFactory;

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
