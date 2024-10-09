<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'strength', 'defense', 'speed', 'intelligence', 'life', 'type_id'];

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
