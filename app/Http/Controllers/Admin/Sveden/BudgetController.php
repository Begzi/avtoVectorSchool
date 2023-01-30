<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Budget;

class BudgetController extends Controller
{
    public function index()
    {
    	$budgets = Budget::get();
        return view('admin.sveden.budget', compact('budgets'));
    }
    public function edit($id)
    {
    	$budget = Budget::find($id);
        return view('admin.sveden.budgetEdit', compact('budget'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'federal_budget' => 'required',
            'local_budget' => 'required',
            'person_budget' => 'required',
            'subject_budget' => 'required',
        ]);

    	$budget = Budget::find($id);
        $data = $request->all();

        $budget->update($data);

        return redirect()->route('admin.sveden.budget.index')->with('success', 'Изменения сохранены');
    }
    //
}
