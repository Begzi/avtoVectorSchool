<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Sveden\Common;
use App\Models\Main;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $main = true;
        $commons = Common::get();
        $common = $commons[0];
        $mains = Main::get();
        $main = $mains[0];
        return view('welcome', compact('main', 'common'));
    }
    public function storage(Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);
        $data['text'] = $request['text'];
        $application = Application::create($data);
        return redirect()->route('home')->with('success', 'Ваша заявка отправлена');
    }
    public function goodUrls()
    {
        return view('goodUrls');
    }
}
