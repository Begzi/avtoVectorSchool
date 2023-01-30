<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Common;

class CommonController extends Controller
{
    public function index()
    {
        $commons = Common::get();
        return view('admin.sveden.common', compact('commons'));
    }
    public function edit($id)
    {
        $common = Common::find($id);
        return view('admin.sveden.commonEdit', compact('common'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'required',
            'shortname' => 'required',
            'founder' => 'required',
            'address' => 'required',
            'work_time_day' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $common = Common::find($id);
        $data = $request->all();

        $common->update($data);

        return redirect()->route('admin.sveden.common.index')->with('success', 'Изменения сохранены');
    }

    public function destroy($id)
    {
        //
    }
}
