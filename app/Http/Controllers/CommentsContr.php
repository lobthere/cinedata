<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsContrl extends Controller
{
    public function addComments(Request $request, $id){

        $request -> validate([
            'foreignId' => 'required',
            'username' => 'required',
            'comment' => 'required'
        ]);

        Comments::create(['foreignId' => $id,
                        'username' => $request->username,
                        'comment' => $request->comment
                    ]);

        return redirect('/movies/' . $id);
    }
}
