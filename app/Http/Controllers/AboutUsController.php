<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $team = [
            [
                'name' => 'Andrea',
                'surname' => 'Cagnina',
                'role' => 'Legale Buono',
                'quote' => 'La giustizia non è altro che carità pubblica.',
                'author' => 'Benjamin Franklin',
                'email' => 'abc@bca.it',
                'image' => 'avatar-4.jpg',
            ],
            [
                'name' => "Simone",
                'surname' => 'D\'Urso',
                'role' => 'Legale Malvagio',
                'quote' => "Tutte le guerre sono basate sull'inganno.",
                'author' => 'Sun Tzu',
                'email' => 'def@bca.it',
                'image' => 'avatar-3.jpg',
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Alquati',
                'role' => 'Neutrale Puro',
                'quote' => 'Il mondo è cambiamento; la vita è opinione.',
                'author' => 'Marcus Aurelius',
                'email' => 'opq@bca.it',
                'image' => 'avatar-5.jpg',
            ],
            [
                'name' => "Luca ",
                'surname' => 'Di Santo',
                'role' => 'Neutrale Buono',
                'quote' => "La virtù è il giusto mezzo tra due estremi.",
                'author' => 'Aristotele',
                'email' => 'lmn@bca.it',
                'image' => 'avatar-1.jpg',
            ],
            [
                'name' => "Rivaldo",
                'surname' => 'Gjoni',
                'role' => 'Caotico Buono',
                'quote' => "La vita è come andare in bicicletta. Per mantenere l'equilibrio, devi continuare a muoverti.",
                'author' => 'Albert Einstein',
                'email' => 'ghi@bca.it',
                'image' => 'avatar-2.jpg',
            ],
        ];

        return view('about-us.about-us', compact('team'));
    }
}
