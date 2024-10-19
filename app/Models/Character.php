<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Character extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'strength', 'defense', 'speed', 'intelligence', 'life', 'type_id'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function items()
    {

        return $this->belongsToMany(Item::class);
    }
}
