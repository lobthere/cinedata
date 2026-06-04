<?php
namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MovieController extends Controller{
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

        $com = \App\Models\Comments::where('foreignId', '=', $enteredId)->get();

        //cherche dans la liste jusqu a ce qu il ai le meme ID
        //search in the list of movies until it find the good one
        foreach($movies as $data){
            //quand la meme ID, retourne la page web des informations correspondant a cet ID
            //if found -> return the page with the informations in the id
            if ($data['id'] == $enteredId){
                }
                return view('movies.show', ['movie' => $data], ['comments' => $com]);
        };
    }

    public function create(){
        return view('movies.add');
    }

    public function store(Request $request){

        $request -> validate([
            'title' => 'required|unique:Movies',
            'content' => 'required|unique:Movies',
            'img' => 'required|file|mimes:jpg,jpeg,png,webp'
        ]);

        // Create image name from title
        $extension = $request->file('img')->getClientOriginalExtension();

        $imageName = Str::slug($request->title) . '.' . $extension;
        
        // Upload to public/images/film/
        $request->file('img')->move(
            public_path('images/film'),
            $imageName
        );

        Movies::create(['title' => $request->title,
                        'content' => $request->content,
                        'img' => '/images/film/' . $imageName
                        ]);
        
        return redirect('/movies');
    }

    public function edit($id_movie){
        $movie = Movies::findOrFail($id_movie);
        return view('movies.edit', ['movie' => $movie]);
}

    public function update(Request $request, $id){
        //find movie
        $movie = Movies::findOrFail($id);

        //check for needed data
        $request -> validate([
            'img' => 'file|mimes:jpg,jpeg,png,webp'
        ]);

        //concat to make the new image name
        
        //check if image has been inserted
        if(!empty($request->img)){
            
            //if inserted, delete old image
            unlink(public_path($movie['img']));
            
            $extension = $request->file('img')->getClientOriginalExtension();

            $imageName = Str::slug($request->title) . $extension;
            
            // Upload to public/images/film/
            $request->file('img')->move(
                public_path('images/film'),
                $imageName
            );

            //update all the new parameters
            $movie->update(['title' => $request->title,
                        'content' => $request->content,
                        'img' => '/images/film/' . $imageName
                        ]);
            
            //return to the edited page
            return redirect('/movies/' . $movie['id']);
        }
        else{

            //if movie changed
            if($movie['title'] != $request['title']){

                $extension = explode(".",$movie->img)[1];

                $imageName = $request['title'] . '.' . $extension;
                
                //edit file name
                rename(public_path($movie['img']), public_path("/images/film/" . $imageName));
                
                //update accordingly
                $movie->update(['title' => $request->title,
                    'content' => $request->content,
                    'img' => '/images/film/' . $imageName
                ]);

                //return to the edited page
                return redirect('/movies/' . $movie['id']);
            }

            movie->update(['title' => $request->title,
                    'content' => $request->content
                ]);
        
            //return to the edited page
            return redirect('/movies/' . $movie['id']);
        }
    }

    public function destroy($id){
        $movie = Movies::findOrFail($id);
        $movie->delete();
        return redirect('/movies');
    }
}
?>