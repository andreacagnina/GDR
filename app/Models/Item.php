<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'category', 'type', 'weight', 'cost', 'dice', 'image'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
