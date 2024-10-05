<?php

namespace App\Http\Controllers;

use App\Models\Character;

use Illuminate\Http\Request;

class RogueController extends Controller
{

    public function index()
    {
        $characters = Character::where('type_id', 9)->get();
        return view('characters.index', compact('characters'));
    }
}
