<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Relation;
use App\Models\Symptom;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index()
    {
        $relations = Relation::with('symptom','disease')->get();
        return view('admin.relations.index', compact('relations'));
    }

    public function create()
    {
        $disease = Disease::all();
        $symptom = Symptom::all();
        return view('admin.relations.create',compact('disease','symptom'));
    }

    public function store(Request $request)
    {
        // if (!empty) {
        //     # code...
        // }

        Relation::create([
            'symptom_id' => $request->symptom_id,
            'disease_id' => $request->disease_id,
        ]);

        return redirect()->route('relations.index')->with(
            'success','Task Created Successfully!'
        );
    }
}
