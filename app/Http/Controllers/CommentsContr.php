<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsContr extends Controller
{
    public function addComments(Request $request, $id){

        $request -> validate([
            'username' => 'required',
            'comment' => 'required'
        ]);

        Comments::create(['moviesId' => $id,
                        'username' => $request->username,
                        'comment' => $request->comment
                    ]);

        return redirect('/movies/' . $id);
    }
}
