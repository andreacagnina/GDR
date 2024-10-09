<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Type;

class FilterCharacterTypeController extends Controller
{
    public function index($typeName)
    {

        $types = Type::all();
        $type = Type::where('name', $typeName)->firstOrFail();
        $characters = Character::where('type_id', $type->id)->get();
        return view('characters.index', compact('characters', 'type', 'types'));
    }
}
