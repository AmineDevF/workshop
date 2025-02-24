<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::with('category', 'user', 'comments')->latest()->paginate(2);

        //  dump(Post::with('category','user','comments')->get());



        return view('posts/index', ["posts" => $posts]);
    }
    public function myPosts()
    {

        $posts = Post::with('category', 'user', 'comments')->where('user_id',auth()->user()->id)->latest()->paginate(2);

        return view('posts.my-posts', ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required'],
            'description' => ['required'],
            'image' => ['required']
        ]);

        $imagepath = $request->file('image') ? $request->file('image')->store('posts', 'public') : null;
        // dd($imagepath);
        Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'image' => $imagepath,
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', ["post" => $post, "categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required'],
            'description' => ['required']
        ]);
        $ImagePath = $request->file('image') ? $request->file('image')->store('posts', 'public') : $post->image;

        $post->update([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'image' => $ImagePath,
        ]);

        return redirect()->route('posts.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (auth()->user()->role->name == "admin") {

            $post->delete();
            return redirect()->back();
        }
    }
}
