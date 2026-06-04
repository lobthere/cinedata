<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsContr extends Controller
{
    public function addComments(Request $request, $id){
        
        //check that you have entered a username and comment
        $request -> validate([
            'username' => 'required|min:4|max:255',
            'comment' => 'required'
        ]);

        //create the comments, store them in a dedicated sheet with the movieId as a foreign key
        Comments::create(['moviesId' => $id,
                        'username' => $request->username,
                        'comment' => $request->comment
                    ]);

        return redirect('/movies/' . $id);
    }
}
