<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato = new SiteContato();
        // $contato->nome = 'Sistema SG';
        // $contato->telefone = '(11) 96176-4937';
        // $contato->email = 'julio@gmail.com';
        // $contato->motivo_contato = '1';
        // $contato->mensagem = 'Seja bem0vindo ao sistema';
        // $contato->save();

        SiteContato::factory(10)->create();
    }
}
