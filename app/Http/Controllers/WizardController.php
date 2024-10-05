<?php

namespace App\Http\Controllers;

use App\Models\Character;

use Illuminate\Http\Request;

class WizardController extends Controller
{

    public function index()
    {
        $characters = Character::where('type_id', 12)->get();
        return view('characters.index', compact('characters'));
    }
}
