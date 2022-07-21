<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Relation;
use App\Models\Symptom;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $symptom = Symptom::all();
        $relations= Relation::all();
        return view('diagnosis', compact('relations','symptom'));
    }
}
