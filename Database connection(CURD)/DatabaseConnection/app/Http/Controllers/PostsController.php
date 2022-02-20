<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\_post;

class PostsController extends Controller
{
    //index function to show the posts and take array of the posts as paramerter
    public function index()
    {
        $Posts=_post::all();
        return view("Posts.index",["Posts"=>$Posts]);
    }
    // function show to show the post 
    public function show(int $id)
    {
        $post=_post::find($id);
        return view("Posts.show",["post"=>$post]);
        
    }

    // function to create new post
    public function create()
    {
        return view("Posts.create");
    }

    //function store to store the data in the database
    public function store(Request $ObjectRequest)
    {
        _post::create(
            ["Descripation"=>$ObjectRequest->Descripation,
            "year"=>$ObjectRequest->year,
            "posted_by"=>$ObjectRequest->posted_by
            ]
        );
        return redirect()->route("posts");
    }

    //function to update the post
    public function update(Request $ObjectRequest )
    {
        // dd($ObjectRequest);
        _post::where('id',$ObjectRequest->id)->update(['Descripation'=>$ObjectRequest->Descripation,'year'=> $ObjectRequest->year,'posted_by'=>$ObjectRequest->posted_by]);
        return redirect()->route("posts");
    }

    //function to edit the post
    public function edit(int $id)
    {
        $post=_post::find($id);
        return view("Posts.edit",["post"=>$post]);
    }

    //function to delete the posts
    public function delete(int $id)
    {
        _post::destroy($id);
        return redirect()->route("posts");
    }
    

}
