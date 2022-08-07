<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::get();

        return inertia('Pokemon',[
            'pokemons' => $pokemons
        ]);
    }
}
