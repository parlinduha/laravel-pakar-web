<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $posts = Post::with('disease')->limit(5)->get();
        return view('post',compact('posts'));
    }
    
    public function show(Post $basis_pengetahuan)
    {
        // $basis_pengetahuan = Post
        return view('post_detail', compact('basis_pengetahuan'));
    }

    // public function edit(Request $request)
    // {
    //     return view('profile',[
    //         'user' => $request->user()
    //     ]);
    // }

    // public function update(Request $request)
    // {
    //     $request->user()->update(
    //         $request->all()
    //     );

    //     return redirect()->route('profile');
    // }
}
