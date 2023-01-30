<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Grant;

class GrantController extends Controller
{
    public function index()
    {
    	$grants = Grant::get();
        return view('admin.sveden.grant', compact('grants'));
    }
    public function edit($id)
    {
    	$grant = Grant::find($id);
        return view('admin.sveden.grantEdit', compact('grant'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'scholarship' => 'required',
            'dormitory' => 'required',
        ]);

    	$grant = Grant::find($id);
        $data = $request->all();

        $grant->update($data);

        return redirect()->route('admin.sveden.grant.index')->with('success', 'Изменения сохранены');
    }
}
