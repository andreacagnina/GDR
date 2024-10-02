<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $team = [
            [
                'name' => 'Andrea Cagnina', 
                'role' => 'Legale Buono',
                'quote' => 'La giustizia non è altro che carità pubblica.',
                'author' => 'Benjamin Franklin',
                'email' => 'abc@bca.it',
                'image' => '',
            ],
            [
                'name' => "Simone D'urso", 
                'role' => 'Legale Buono',
                'quote' => "Tutte le guerre sono basate sull'inganno.",
                'author' => 'Sun Tzu',
                'email' => 'abc@bca.it',
                'image' => '',
            ],
            [
                'name' => "Rivaldo Gjoni", 
                'role' => 'Caotico Buono',
                'quote' => "La vita è come andare in bicicletta. Per mantenere l'equilibrio, devi continuare a muoverti.",
                'author' => 'Albert Einstein',
                'email' => 'abc@bca.it',
                'image' => '',
            ],
            [
                'name' => "Luca Di Santo", 
                'role' => 'Neutrale Buono',
                'quote' => "La virtù è il giusto mezzo tra due estremi.",
                'author' => 'Aristotele',
                'email' => 'abc@bca.it',
                'image' => '',
            ],
            [
                'name' => 'Francesco Alquati',
                'role' => 'Neutrale Puro',
                'quote' => 'Il mondo è cambiamento; la vita è opinione.',
                'author' => 'Marcus Aurelius',
                'email' => 'abc@bca.it',
                'image' => 'avocado.png'
            ],
        ];
        
        return view('about-us', compact('team'));
    }
}
