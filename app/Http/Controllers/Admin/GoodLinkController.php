<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GoodLink;

class GoodLinkController extends Controller
{
    public function index()
    {
        // $goodLink = GoodLink::find($this->magicNumber_oneSiteThatsWhy_magicNunber_is_one);
        $goodLinks = GoodLink::get();
        return view('admin.goodLink.index', compact('goodLinks'));
    }
    public function edit($id)
    {
        $goodLink = GoodLink::find($id);
        return view('admin.goodLink.edit', compact('goodLink'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);
        $goodLink = GoodLink::find($id);
        $data = $request->all();

        $goodLink->update($data);

        return redirect()->route('admin.goodLink.index')->with('success', 'Изменения сохранены');
    }
}
