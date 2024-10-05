<?php

namespace App\Http\Controllers;

use App\Models\Character;

use Illuminate\Http\Request;

class BarbarianController extends Controller
{

    public function index()
    {
        $characters = Character::where('type_id', 1)->get();
        return view('characters.index', compact('characters'));
    }
}
