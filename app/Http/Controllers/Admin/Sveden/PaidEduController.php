<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Document;
use App\Models\Sveden\PaidEducation;

class PaidEduController extends Controller
{
	public function index()
    {
    	$paidEdus = PaidEducation::get();

    	$documents = Document::get();
    	$document = $documents[0];
        return view('admin.sveden.paidEdu', compact('paidEdus', 'document'));
    }
    public function edit($id)
    {
    	$paidEdu = PaidEducation::find($id);
        return view('admin.sveden.paidEduEdit', compact('paidEdu'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
        ]);

    	$paidEdu = PaidEducation::find($id);
        $data = $request->all();

        $paidEdu->update($data);

        return redirect()->route('admin.sveden.paidEdu.index')->with('success', 'Изменения сохранены');
    }
}
