<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meta;

class MetaController extends Controller
{
    public function index()
    {
        $metas = Meta::get();
        return view('admin.meta.index', compact('metas'));
    }
    public function edit($id)
    {
        $meta = Meta::find($id);
        return view('admin.meta.edit', compact('meta'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'keywords' => 'required',
        ]);
        $meta = Meta::find($id);
        $data = $request->all();

        $meta->update($data);

        return redirect()->route('admin.meta.index')->with('success', 'Изменения сохранены');
    }
}
