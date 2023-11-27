<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
   use HasFactory;
    protected $fillable = ['name', 'active',];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
