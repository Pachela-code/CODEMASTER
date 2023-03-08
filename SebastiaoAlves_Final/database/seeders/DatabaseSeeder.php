<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SiteInformation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Password is passwowrd
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
        ]);

        SiteInformation::create([
            'email' => 'example@mail.com',
            'phone' => '123456789',
            'address' => 'This is address',
            'author_name' => 'SEBASTIÃO ALVES',
            'author_text' => 'O autor de "Senhora do Amor e da Guerra"  nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido e é professor no Instituto Superior Técnico. 

            Até aos 45 anos, escreveu exclusivamente poesia, mas começou a sentir que se repetia e decidiu mais uma vez tentar escrever ficção, com um afinco que nunca pusera em anteriores tentativas. E descobriu que era capaz de escrever diálogos e congeminar enredos.
            
            Publicou então sucessivamente um livro de contos, “O caracol estrábico” (2011), e os romances “O colecionador de amnésias” (2014), “O velho que pensava que fugia” (2017), o romance histórico “Senhora do amor e da guerra” (2020) e o romance "O homem certo é difícil de encontrar" (2021).',
            'latest_text' => 'Some text for latest',
            'facebook_url' => '#',
            'instagram_url' => '#',
            'linkedin_url' => '#'
        ]);
    }
}
