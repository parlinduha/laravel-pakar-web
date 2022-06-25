<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::get();
        return view('admin.symptoms.index', compact('symptoms'));
    }
    public function create()
    {
        return view('admin.symptoms.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_symptom' => 'required|unique:symptoms|min:5',
        ]);

        $code_symptom = Helper::IDGenerator(new Symptom, 'code_symptom', 3,'GJL');

        Symptom::create([
            'code_symptom' => $code_symptom,
            'name_symptom' => $request->name_symptom,
        ]);

        return redirect()->route('symptoms.index')->with('success', 'Task Created Successfully!');
    }
    public function edit(Symptom $symptom)
    {
        return view('admin.symptoms.edit',compact('symptom'));
    }
    public function update(Request $request, Symptom $symptom)
    {
        $this->validate($request,[
            'name_symptom' => 'required|min:5',
        ]);
        
        $symptom->update([
            'name_symptom' => $request->name_symptom
        ]);
        
        return redirect()->route('symptoms.index')->with('success', 'Task Updated Successfully!');
    }
    public function destroy(Symptom $symptom)
    {
        $symptom->delete();
        return redirect()->route('symptoms.index')->with('success', 'Task Deleted Successfully!');

    }
}
