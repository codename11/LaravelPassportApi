<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PostResource;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $posts = Post::all();

        $response = array(
            "posts" => PostResource::collection($posts),
            "message" => "Retrieved successfully"
        );

        return response($response, 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $data = $request->all();

        $validator = Validator::make($data, [
            "title" => "required|max:30",
            "body" => "required|max:255",
        ]);

        $response = array();

        if($validator->fails()){

            $response["error"] = $validator->errors();
            $response["message"] = "Validation Error";

            return response($response);

        }

        $post = Post::create($data);
        $response["post"] = new PostResource($post);
        $response["message"] = "Created successfully";

        return response($response, 200);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $post = Post::find($id);
        $response = array();
        $response["post"] = new PostResource($post);
        $response["message"] = "Retrieved successfully";

        return response($response, 200);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $post = Post::find($id);
        $post->update($request->all());

        $response = array();
        $response["post"] = new PostResource($post);
        $response["message"] = "Retrieved successfully";

        return response($response, 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
        $post = Post::find($id);
        $deletedPost = $post;
        $post->delete();

        $response = array();
        $response["post"] = new PostResource($deletedPost);
        $response["message"] = "Deleted successfully";

        return response($response);

    }
}
