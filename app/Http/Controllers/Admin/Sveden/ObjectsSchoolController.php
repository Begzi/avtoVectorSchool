<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\ObjectsSchool;

class ObjectsSchoolController extends Controller
{
    public function index()
    {
        $objects = ObjectsSchool::get();
        return view('admin.sveden.objects', compact('objects'));
    }
    public function edit($id)
    {
        $object = ObjectsSchool::find($id);
        return view('admin.sveden.objectsEdit', compact('object'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'cabinet_count' => 'required',
            'car_count' => 'required',
            'table_count' => 'required',
            'chair_count' => 'required',
            'placat_count' => 'required',
            'maneken_count' => 'required',
            'pc_count' => 'required',
            'processor_count' => 'required',
            'screen_count' => 'required',
        ]);

        $objects = ObjectsSchool::find($id);
        $data = $request->all();

        $objects->update($data);

        return redirect()->route('admin.sveden.objectsSchool.index')->with('success', 'Изменения сохранены');
    }

}
