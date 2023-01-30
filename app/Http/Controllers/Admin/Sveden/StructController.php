<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Struct;

class StructController extends Controller
{
    public function index()
    {
        $structs = Struct::get();
        return view('admin.sveden.struct', compact('structs'));
    }
    public function edit($id)
    {
        $struct = Struct::find($id);
        return view('admin.sveden.structEdit', compact('struct'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'government' => 'required',
            'leader_government' => 'required',
            'location_government' => 'required',
            'info_about_government_pdf' => 'nullable|mimes:pdf',
        ]);

        $struct = Struct::find($id);
        $data = $request->all();
        if ($request->hasFile('info_about_government_pdf')) {
            $data['info_about_government_pdf'] = Struct::uploadFile($request);
        }

        $struct->update($data);

        return redirect()->route('admin.sveden.struct.index')->with('success', 'Изменения сохранены');
    }
    public function destroy($id)
    {
        //
    }
}
