<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Relation;
use App\Models\Symptom;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $users = User::count();
        $diseases = Disease::count();
        $symptoms = Symptom::count();
        $relations = Relation::count();
        return view('admin/home', compact('users','diseases','relations','symptoms'));
    }
}
