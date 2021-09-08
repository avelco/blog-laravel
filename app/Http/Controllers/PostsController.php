<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    
    protected $duarded = [];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        
        $post = new Post;
        
        $post->title  = $request->get('title');
        $post->url  = str_slug($request->get('title'));
        
        $post->save();
        
        return redirect()->route('posts.edit', $post);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
/*    public function store(PostRequest $request)
    {
        $post = new Post;
        
        $post->title  = $request->get('title');
        $post->url  = str_slug($request->get('title'));
        $post->body = $request->get('content');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = $request->has($request->get('published_at')) ? Carbon::parse($request->get('published_at')) : null;
        $post->category_id = $request->get('category');
        
        $post->save();
        
        $post->tags()->attach($request->get('tags'));
        
        return back()->with('flash', 'Post '. $post->title. ' was created');
    }
*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, PostRequest $request)
    {
        $post->title  = $request->get('title');
        $post->url  = str_slug($request->get('title'));
        $post->body = $request->get('content');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
        $post->category_id = $request->get('category');

        $post->save();
        
        $post->tags()->sync($request->get('tags'));
        
        return back()->route('posts.edit', $post)->with('flash', 'Post '. $post->title. ' was saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
