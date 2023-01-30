<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use App\Models\Main;

class MainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function main()
    {
        // $main = Main::find($this->magicNumber_oneSiteThatsWhy_magicNunber_is_one);
        $mains = Main::get();
        return view('admin.main.index', compact('mains'));
    }
    public function edit($id)
    {
        $main = Main::find($id);
        return view('admin.main.edit', compact('main'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
            'email' => 'required|email',
            'tagline' => 'required',
        ]);
        $main = Main::find($id);
        $data = $request->all();

        $main->update($data);

        return redirect()->route('admin.main')->with('success', 'Изменения сохранены');
    }
}
