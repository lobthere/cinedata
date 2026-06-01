<?php
namespace App\Http\Controllers;

use App\Models\Movies;

class MovieController extends Controller{
    private function getMovies(){
    /*
        contient notre liste de film et la retourne
    */
        return [
            ['title' => 'Armagedon', 'content' => 'Un film utilisé par la nasa pour trouver des erreurs', 'img' => 'https://upload.wikimedia.org/wikipedia/en/f/fc/Armageddon-poster06.jpg'],
            ['title' => '1917', 'content' => 'un film sur la premiere guerre mondial', 'img' => 'https://upload.wikimedia.org/wikipedia/en/f/fe/1917_%282019%29_Film_Poster.jpeg'],
            ['title' => 'moi moche et mechant', 'content' => 'des minions et gru', 'img' => 'https://upload.wikimedia.org/wikipedia/fr/7/7a/Moi-moche-et-mechant.jpg'],
            ['title' => 'zootopie', 'content' => 'un zoo mais ils parlent', 'img' => 'https://duckduckgo.com/i/07228fb46dac0f09.jpg'],
            ['title' => 'interstellar', 'content' => 'un film pour casser la tête', 'img' => 'test'],
            ['title' => 'Mon voisin totoro', 'content' => 'film mignon ghibli', 'img' => 'test'],
            ['title' => 'Jurrassic parc', 'content' => 'un film de dinosaures', 'img' => 'test']
        ];// \App\Models\Article::create(['name' =>'Premier article','content' =>'Contenu de mon premier article.', 'img' => ]);
    }

    public function index(){
        //retourne la liste des films dans la variable nommee 'movies' quand il est appele
        //return the list of the movies in the var 'movies' when called
        return view('movies.index', [
            //call the function getMovies() and load it s result in 'movies'
            //appelle la fonction getMovies() et charge le resultat dans la variable 'movies'
            'movies' => Movies::all()
        ]);
    }

    public function show($enteredId){
        /*
            prend en parametre un ID, renvoie vers la page associee a l ID avec pour la var 'movie' la valeur associee a cet id
            Take the ID and return the associated value in the corresponding page
            */
        $movies = \App\Models\Movies::where('id', '=', $enteredId)->get();

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