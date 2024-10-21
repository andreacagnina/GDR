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
    /**
     * Restituisce le classi compatibili per l'arma
     *
     * @return array
     */
    public function getCompatibleClasses()
    {
        return match ($this->name) {
            'Club', 'Greatclub', 'Quarterstaff' => ['druid', 'monk', 'sorcerer', 'warlock'], // k
            'Dagger', 'Light hammer' => ['bard', 'rogue', 'wizard', 'sorcerer', 'warlock'], // 
            'Handaxe', 'Spear', 'Javelin' => ['fighter', 'ranger'],
            'Mace' => ['cleric', 'paladin'],
            'Sickle' => ['druid'],
            'Sling' => ['druid', 'wizard', 'sorcerer'],
            'Crossbow, light', 'Shortbow' => ['fighter', 'ranger'],
            'Dart' => ['monk', 'sorcerer'],
            'Sling' => ['druid', 'wizard', 'sorcerer'],
            'Battleaxe', 'Greataxe', 'Greatsword', 'Maul' => ['barbarian'],
            'Flail', 'War pick', 'Morningstar', 'Warhammer' => ['cleric', 'paladin'],
            'Longsword', 'Halberd', 'Pike', 'Trident', 'Glaive' => ['fighter', 'paladin'],
            'Rapier', 'Scimitar', 'Shortsword', 'Whip' => ['bard', 'rogue'],
            'Lance' => ['fighter', 'paladin'],
            'Crossbow, hand', 'Crossbow, heavy', 'Longbow', 'Blowgun', 'Net' => ['ranger', 'fighter'],

            default => []
        };
    }
}
