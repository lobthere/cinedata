<?php
namespace App\Http\Controllers;


class MovieController extends Controller{
    private function getMovies(){
        return [
            ['title' => 'Armagedon', 'content' => 'Un film utilisé par la nasa pour trouver des erreurs'],
            ['title' => '1917', 'content' => 'un film sur la premiere guerre mondial'],
            ['title' => 'moi moche et mechant', 'content' => 'des minions et gru'],
            ['title' => 'zootopie', 'content' => 'un zoo mais ils parlent'],
            ['title' => 'interstellar', 'content' => 'un film pour casser la tête'],
            ['title' => 'Mon voisin tototro', 'content' => 'film mignon ghibli']
        ];
    }

    public function index(){
        return view('movies.index', [
            'movies' => $this->getMovies()
        ]);
    }
}
?>