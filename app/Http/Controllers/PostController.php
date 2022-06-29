<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\Eloquent\Sluggable\Services\SlugService;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('admin/posts/index',compact('posts'));
    }
    public function create()
    {
        $disease = Disease::all();
        return view('admin.posts.create', compact('disease'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        Post::create([
            // 'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image' => $image->hashName(),
            'title' => $request->title,
            'disease_id' => $request->disease_id,
            'content' => $request->content,
        ]);

        
        return redirect()->route('posts.index')->with([
            'success' => 'Data success created'
        ]);
    }

    public function edit(Post $post)
    {
        return view ('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'min:5',
            'content' => 'min:10',
        ]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            Storage::delete('public/posts'.$post->image);

            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }else{
            $post->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }

        return redirect()->route('posts.index')->with([
            'success' => 'Data success created'
        ]);
    }
    public function destroy(Post $post )
    {
        Storage::delete('public/posts'. $post->image);

        $post->delete();
        return redirect()->route('posts.index')->with(['success' => 'Data success deleted' ]);
    }
}
