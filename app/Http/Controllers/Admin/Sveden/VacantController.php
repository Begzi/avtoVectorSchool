<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Vacancy;

class VacantController extends Controller
{
    public function index()
    {
    	$sveden = true;
    	$vacants = Vacancy::get();
        return view('admin.sveden.vacant', compact('vacants'));
    }
    public function edit($id)
    {
    	$vacant = Vacancy::find($id);
        return view('admin.sveden.vacantEdit', compact('vacant'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'federal_budget_count' => 'required|integer',
            'local_budget_count' => 'required|integer',
            'person_budget_count' => 'required|integer',
            'subject_budget_count' => 'required|integer',
        ]);

    	$vacant = Vacancy::find($id);
        $data = $request->all();

        $vacant->update($data);

        return redirect()->route('admin.sveden.vacant.index')->with('success', 'Изменения сохранены');
    }
}
