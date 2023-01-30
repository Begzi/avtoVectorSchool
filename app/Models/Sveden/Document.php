<?php

namespace App\Models\Sveden;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    protected $guarded = [];
    use HasFactory;

    public static function uploadFile(Request $request, $typeFile)
    {
    	if (file_exists("pdf/document" . $request->file($typeFile)->getFileName())){
    		die('Такой файл есть');
    	}
        return $request->file($typeFile)->storeAs("pdf/document", $request->file($typeFile)->getClientOriginalName());
    }
    public function getFileName($name)
    {
        if (!$name) {
            return 'СканФайла отстутствует';
        }
        $shortName = substr($name, strrpos($name, '/') + 1);
                                				
        $url = '<a href="/uploads/' . $name. '" style="color: blue">' . $shortName . '</a>';
        return $url;
    }
}
