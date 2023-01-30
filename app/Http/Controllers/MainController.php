<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Sveden\Common;
use App\Models\Main;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // $main = true;
        // $common = Common::find(1);
        $common = Common::find($this->magicNumber_oneSiteThatsWhy_magicNunber_is_one);
        $main = Main::find($this->magicNumber_oneSiteThatsWhy_magicNunber_is_one);
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
}
