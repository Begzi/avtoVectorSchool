<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\EducationStandart;

class EduStandartController extends Controller
{
    public function index()
    {
        $eduStandarts = EducationStandart::get();
        return view('admin.sveden.eduStandart', compact('eduStandarts'));
    }
    public function edit($id)
    {
        $eduStandart = EducationStandart::find($id);
        return view('admin.sveden.eduStandartEdit', compact('eduStandart'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
            'link_requirements' => 'required',
        ]);

        $eduStandarts = EducationStandart::find($id);
        $data = $request->all();
        $eduStandarts->update($data);

        return redirect()->route('admin.sveden.eduStandart.index')->with('success', 'Изменения сохранены');
    }
    public function destroy($id)
    {
        //
    }
}
