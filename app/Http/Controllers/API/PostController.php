<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Traits\testTrait;
use App\User;

class PostController extends Controller
{

    use testTrait;
    //for api is below

    public function traitTest()
    {
        echo "traitTest2";
    }

    public function indexAPI() 
    {
        $this->traitTest();
        return Post::all();
    }

    public function getUserPost(Request $req)
    {
        test();
        $this->validate($req, [
            'userId' => 'required',
            'userEmail' => 'required'
        ]);

        $user = User::find(intval($req->userId));

        // dd($user);
        if ($user) {
            $posts = $user->posts;
            return json_decode($posts);
        } else {
            return [
                'error' => 'User does not exist',
                'status' => 404
            ];
        }

        // $user = User::find($req->userId)->first()->post();
        // return $user;

        // return $req->header();
    }

    //for ui is below
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // return Post::all();
    //     $data = Post::orderBy("created_at", 'desc')->paginate(10);
    //     return view("posts.index")->with("data", $data);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('posts.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'body' => 'required'
    //     ]);

    //     //creating post
    //     $post = new Post;
    //     $post->title = $request->input('title');
    //     $post->body = $request->input('body');
    //     $post->save();

    //     return redirect('/posts')->with('success', 'Post successfully created');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $requestedPost = Post::find($id);
    //     return view("posts.singlePost")->with('post', $requestedPost);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $post = Post::find($id);
    //     return view('posts.edit')->with('post', $post);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'body' => 'required'
    //     ]);

    //     //creating post
    //     $post = Post::find($id);
    //     $post->title = $request->input('title');
    //     $post->body = $request->input('body');
    //     $post->save();

    //     return redirect('/posts')->with('success', 'Post successfully edited');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $post = Post::find($id);
    //     $post->delete();

    //     return redirect('/posts')->with('success', 'Post successfully deleted');
    // }
}
