<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Post::get();
        return view('welcome', compact('post'));
    }

    public function profile(Request $request)
    {
        return view ('profile.index',[
            'user' => $request->user(),
        ]);
    }
    public function upload_profile(Request $request)
    {
        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('profile',$filename,'public');
            $request->user()->update(['avatar'=>$filename]);
        }
        Alert::success('Success', 'Avatar update successfully');
        return redirect()->back();
    }

    public function profile_update()
    {
        return view('profile.update');
    }
    public function update(Request $request)
    {

            $request->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'nik' => $request->nik,
            ]);
            Alert::success('Success', 'Profile update successfully');
            return redirect()->back();
    }

    public function profile_password()
    {
        return view('profile.password');
    }
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);
        Alert::success('Success', 'Password update successfully');
        return redirect()->back();
    }
}
