<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Type;
use App\Models\Item;

class FilterCharacterTypeController extends Controller
{
    public function index($typeName)
    {
        $items = Item::all();
        $types = Type::all();
        $type = Type::where('name', $typeName)->firstOrFail();
        $characters = $type->characters;
        return view('characters.index', compact('characters', 'type', 'types', 'items'));
    }
}
