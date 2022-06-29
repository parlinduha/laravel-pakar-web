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
        $this->validate($request,[
            'disease_id' => 'required',
            'symptom_id' => 'required'
        ]);

        Relation::create([
            'symptom_id' => $request->symptom_id,
            'disease_id' => $request->disease_id,
        ]);

        return redirect()->route('relations.index')->with(
            'success','Task Created Successfully!'
        );
    }

    public function edit(Relation $relation)
    {
        $disease = Disease::all();
        $symptom = Symptom::all();
        return view('admin.relations.edit',compact('relation','disease','symptom'));
    }
    public function update(Request $request, Relation $relation)
    {
        $this->validate($request,[
            'symptom_id' => 'required',
            'disease_id' => 'required'
        ]);

        $relation->update([
            'symptom_id' => $request->symptom_id,
            'disease_id' => $request->disease_id
        ]);
        return redirect()->route('relations.index')->with('success', 'Task Updated Successfully!');
    }

    public function destroy(Relation $relation)
    {
        $relation->delete();
        return redirect()->route('relations.index')->with('success', 'Task Deleted Successfully!');

    }
}
