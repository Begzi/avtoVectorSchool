<?php

namespace App\Models\Sveden;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Struct extends Model
{
    protected $guarded = [];
    use HasFactory;

    public static function uploadFile(Request $request, $image = null)
    {

        return $request->file('info_about_government_pdf')->storeAs("pdf/struct", $request->file($typeFile)->getClientOriginalName());
    }
    // public function getFileName()
    // {
    //     if (!$this->info_about_government_pdf) {
    //         return 'СканФайла отстутствует';
    //     }
    //     return substr($this->info_about_government_pdf, strrpos($this->info_about_government_pdf, '/') + 1);
    // }

    public function getFileName()
    {
        if (!$this->info_about_government_pdf) {
            return 'СканФайла отстутствует';
        }
        $shortName = substr($this->info_about_government_pdf, strrpos($this->info_about_government_pdf, '/') + 1);
        $url = '<a href="/uploads/' . $this->info_about_government_pdf . '" style="color: blue">' . $shortName . '</a>';
        return $url;
    }
}
