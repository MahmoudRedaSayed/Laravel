<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //index function to show the posts and take array of the posts as paramerter
    public function index()
    {
        $Posts=[
            ["lang"=>"php","id"=>1,"year"=>"2000-22-11"],
            ["lang"=>"js","id"=>2,"year"=>"2000-22-12"]
        ];
        return view("Posts.index",["Posts"=>$Posts]);
    }
    // function show to show the post 
    public function show($id)
    {
        $Posts=[
            ["lang"=>"php","id"=>1,"year"=>"2000-22-11"],
            ["lang"=>"js","id"=>2,"year"=>"2000-22-12"]
        ];
        foreach ($Posts as $post)
        {
            if ($post['id']==$id)
            {
                return view("Posts.show",["post"=>$post]);
            }
        }
        
    }

    // function to create new post
    public function create()
    {
        $Posts=[
            ["lang"=>"php","id"=>1,"year"=>"2000-22-11"],
            ["lang"=>"js","id"=>2,"year"=>"2000-22-12"]
        ];
        return view("Posts.create");
    }

    //function to update the post
    public function update($id)
    {
        $Posts=[
            ["lang"=>"php","id"=>1,"year"=>"2000-22-11"],
            ["lang"=>"js","id"=>2,"year"=>"2000-22-12"]
        ];
        foreach ($Posts as $post)
        {
            if ($post['id']==$id)
            {
                return view("Posts.update",["post"=>$post]);
            }
        }
    }

    //function to edit the post
    public function edit($id)
    {
        $Posts=[
            ["lang"=>"php","id"=>1,"year"=>"2000-22-11"],
            ["lang"=>"js","id"=>2,"year"=>"2000-22-12"]
        ];
        foreach ($Posts as $post)
        {
            if ($post['id']==$id)
            {
                return view("Posts.edit",["post"=>$post]);
            }
        }
    }

    //function to delete the posts
    public function delete()
    {
        $Posts=[
            ["lang"=>"php","id"=>1,"year"=>"2000-22-11"],
            ["lang"=>"js","id"=>2,"year"=>"2000-22-12"]
        ];
        return view("Posts.delete",["Posts"=>$Posts]);
    }
    

}
