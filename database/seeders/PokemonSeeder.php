<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = [
            [
                'generation' => 'Generation 1',
                'pokemon1' => 'Bulbasaur',
                'pokemon2' => 'Charmander',
                'pokemon3' => 'Squirtle',
            ],
            [
                'generation' => 'Generation 2',
                'pokemon1' => 'Chikorita',
                'pokemon2' => 'Cyndaquil',
                'pokemon3' => 'Totodile',
            ],
            [
                'generation' => 'Generation 3',
                'pokemon1' => 'Treecko',
                'pokemon2' => 'Torchic',
                'pokemon3' => 'Mudkip',
            ],
            [
                'generation' => 'Generation 4',
                'pokemon1' => 'Turtwig',
                'pokemon2' => 'Chimchar',
                'pokemon3' => 'Piplup',
            ],
        ]; 
        foreach($pokemons as $p) {
            Pokemon::create($p);
        }     
    }
}
