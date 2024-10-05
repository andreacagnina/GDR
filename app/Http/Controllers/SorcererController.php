<?php

namespace App\Http\Controllers;

use App\Models\Character;

use Illuminate\Http\Request;

class SorcererController extends Controller
{

    public function index()
    {
        $characters = Character::where('type_id', 10)->get();
        return view('characters.index', compact('characters'));
    }
}
