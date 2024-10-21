<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::with('type', 'items')->get();
        return response()->json([
            'success' => true,
            'results' => $characters
        ]);
    }
    public function show($slug)
    {
        $character = Character::with('type', 'items')->where('slug', $slug)->first();
        if ($character) {
            return response()->json([
                'success' => true,
                'results' => $character
            ]);
        }
        return response()->json([
            'success' => false
        ]);
    }
}
