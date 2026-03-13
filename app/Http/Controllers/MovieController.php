<?php
namespace App\Http\Controllers;


class MovieController extends Controller{
    private function getMovies(){
        return [
            ['id' => 0, 'title' => 'Armagedon', 'content' => 'Un film utilisé par la nasa pour trouver des erreurs'],
            ['id' => 1, 'title' => '1917', 'content' => 'un film sur la premiere guerre mondial'],
            ['id' => 2, 'title' => 'moi moche et mechant', 'content' => 'des minions et gru'],
            ['id' => 3, 'title' => 'zootopie', 'content' => 'un zoo mais ils parlent'],
            ['id' => 4, 'title' => 'interstellar', 'content' => 'un film pour casser la tête'],
            ['id' => 5, 'title' => 'Mon voisin totoro', 'content' => 'film mignon ghibli'],
            ['id' => 6, 'title' => 'Jurrassic parc', 'content' => 'un film de dinosaures']
        ];
    }

    public function index(){
        return view('movies.index', [
            'movies' => $this->getMovies()
        ]);
    }

    public function show($enteredId){
        $movies = $this->getMovies();
        foreach($movies as $data){
            if ($data['id'] == $enteredId){
                return view('movies.show', ['movie' => $data]);
            }
        };
    }
}
?>