<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoodLink;

class GoodLinkController extends Controller
{
    public function index()
    {
        $goodLink = GoodLink::find($this->magicNumber_oneSiteThatsWhy_magicNunber_is_one);
        return view('goodLinks', compact('goodLink'));
    }
}
