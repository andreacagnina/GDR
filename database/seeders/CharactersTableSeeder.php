<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;



class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = config('db_characters.characters');

        foreach ($characters as $character) {
            $NewCharacter = new Character();
            $NewCharacter->name = $character['name'];
            $NewCharacter->slug = Str::slug($character['name'], '-');
            $NewCharacter->description = $character['description'];
            $NewCharacter->strength = $character['strength'];
            $NewCharacter->defense = $character['defense'];
            $NewCharacter->speed = $character['speed'];
            $NewCharacter->intelligence = $character['intelligence'];
            $NewCharacter->life = $character['life'];
            $NewCharacter->type_id = $character['type_id'];

            $NewCharacter->save();
        }
    }
}
