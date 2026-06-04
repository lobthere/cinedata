<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Movies extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movies::create(
            ['title' => 'Armagedon',
            'content' => 'Un film avec un astériode sur la fin du monde',
            'img' => '/images/film/Armagedon.jpg'
        ]);
        Movies::create(
            ['title' => 'Dune partie 1',
            'content' => 'Un film dans le desert mais c est pas laurence d arabie',
            'img' => '/images/film/Dune partie 1.jpg'
        ]);
        Movies::create(
            ['title' => 'Moi Moche et Mechant',
            'content' => 'c est lui et il est pas beau (il veut la lune)',
            'img' => '/images/film/Moi Moche et Mechant.jpg'
        ]);
        Movies::create(
            ['title' => 'Mon voisin Totoro',
            'content' => 'le voisin d une petite fille qui vient l aider',
            'img' => '/images/film/Mon voisin Totoro.jpg'
        ]);
        Movies::create(
            ['title' => 'Jurassique Park',
            'content' => 'des dinosaures, bienvenue a jurrassic park',
            'img' => '/images/film/Jurassique Park.jpg'
        ]);
        Movies::create(
            ['title' => '1917',
            'content' => 'film de guerre triste',
            'img' => '/images/film/1917.jpg'
        ]);
        Movies::create(
            ['title' => 'Michael Jackson',
            'content' => 'hi hi',
            'img' => '/images/film/Michael Jackson.jpg'
        ]);
        Movies::create(
            ['title' => 'La communautee de l anneau',
            'content' => 'le seigneur des anneau premier volume oh',
            'img' => '/images/film/La communautee de l anneau.jpg'
        ]);
        Movies::create(
            ['title' => 'Interstellar',
            'content' => 'c est un film dans l espace qui casse la tête',
            'img' => '/images/film/Interstellar.jpg'
        ]);

        Movies::create(
            ['title' => 'Spiderman Far From Home',
            'content' => 'spiderman quoi',
            'img' => '/images/film/Spiderman Far From Home.png'
        ]);

        Movies::create(
            ['title' => 'armagoudronne',
            'content' => 'il damn la rue',
            'img' => '/images/film/armagoudronne.jpg'
        ]);
    }
}
