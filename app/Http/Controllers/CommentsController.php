<?php

namespace ProjectsManager\Http\Controllers;

use ProjectsManager\Comment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if( Auth::check() ){
          $comments = Comment::where('user_id', Auth::user()->id)->get();

           return view('comments.index', ['comments'=> $comments]);  
      }
      return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         //

         if(Auth::check()){
            $comment = Comment::create([
                'body' => $request->input('body'),
                'url' => $request->input('url'),
                'commentable_type' => $request->input('commentable_type'),
                'commentable_id' => $request->input('commentable_id'),
                'user_id' => Auth::user()->id
            ]);


            if($comment){
                return back()->with('success' , 'Comment created successfully');
            }

        }

            return back()->withInput()->with('errors', 'Error creating new comment');

    }

    /**
     * Display the specified resource.
     *
     * @param  \ProjectsManager\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
      $comment = Comment::find($comment->id);

      return view('comments.show', ['comment'=>$comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProjectsManager\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProjectsManager\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProjectsManager\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
