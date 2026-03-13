<?php
namespace App\Http\Controllers;


class MovieController extends Controller{
    private function getMovies(){
    /*
        contient notre liste de film et la retourne
    */
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
        //retourne la liste des films dans la variable nommee 'movies' quand il est appele
        //return the list of the movies in the var 'movies' when called
        return view('movies.index', [
            //call the function getMovies() and load it s result in 'movies'
            //appelle la fonction getMovies() et charge le resultat dans la variable 'movies'
            'movies' => $this->getMovies()
        ]);
    }

    public function show($enteredId){
        /*
            prend en parametre un ID, renvoie vers la page associee a l ID avec pour la var 'movie' la valeur associee a cet id
            Take the ID and return the associated value in the corresponding page
            */
        $movies = $this->getMovies();

        //cherche dans la liste jusqu a ce qu il ai le meme ID
        //search in the list of movies until it find the good one
        foreach($movies as $data){
            //quand la meme ID, retourne la page web des informations correspondant a cet ID
            //if found -> return the page with the informations in the id
            if ($data['id'] == $enteredId){
                return view('movies.show', ['movie' => $data]);
            }
        };
    }
}
?>