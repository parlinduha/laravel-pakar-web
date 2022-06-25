<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::get();
        return view('admin.diseases.index', compact('diseases'));
    }
    public function create()
    {
        return view('admin.diseases.create');
    }
    public function store(Request $request)
    {
        $this->Validate($request,[
            'name_disease' => 'required|unique:diseases|min:5',
            'description' => 'required|min:5'
        ]);


        $disease_id = Helper::IDGenerator(new Disease, 'code_disease',3,'DGN');

        Disease::create([
            'code_disease' => $disease_id,
            'name_disease' => $request->name_disease,
            'description' => $request->description
        ]);
        return redirect()->route('diseases.index')->with(
            'success','Task Created Successfully!'
        );
    }
    public function edit(Disease $disease)
    {
        return view('admin.diseases.edit',compact('disease'));
    }
    public function update(Request $request, Disease $disease)
    {
        $this->Validate($request,[
            'name_disease' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        $disease->update([
            'name_disease' => $request->name_disease,
            'description' => $request->description
        ]);
        return redirect()->route('diseases.index')->with(
            'success','Task Updated Successfully!'
        );
    }

    public function destroy(Disease $disease)
    {
        $disease->delete();
        return redirect()->route('diseases.index')->with(
            'success','Task Deleted Successfully!'
        );
    }
}
