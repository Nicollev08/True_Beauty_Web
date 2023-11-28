<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'rating' => 'required',
        ]);

        $comment = new Comment($request->all());
        $comment->user_id = auth()->user()->id;
        $comment->save();

        return redirect()->route('/');
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'comment' => 'required',
            'rating' => 'required',
        ]);

        $comment->user_id = auth()->user()->id;
        $comment->update($request->all());

        return redirect()->route('/');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('/');
    }
}
