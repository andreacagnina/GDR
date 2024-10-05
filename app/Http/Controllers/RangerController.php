<?php

namespace App\Http\Controllers;

use App\Models\Character;

use Illuminate\Http\Request;

class RangerController extends Controller
{

    public function index()
    {
        $characters = Character::where('type_id', 8)->get();
        return view('characters.index', compact('characters'));
    }
}
