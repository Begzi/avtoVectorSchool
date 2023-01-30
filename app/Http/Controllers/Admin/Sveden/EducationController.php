<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Education;

class EducationController extends Controller
{
	private $arrayNameDocument = [
            'educational_accreditation_pdf',
            'practicalKnowladge',
        ];
    private $arrayNameLabel = [
            'Лицензия на осуществление образовательной деятельности (с приложениями) (СканФайла, в pdf)',
            'Практические навыки (СканФайла, в pdf)',
        ];
    private $arrayNameLabelAddedDocument = [
            'Добавленная лицензия на осуществление образовательной деятельности (с приложениями) (СканФайла, в pdf)',
            'Добавленная практические навыки (СканФайла, в pdf)',
        ];
    public function index()
    {
    	$educations = Education::get();
    	$arrayNameDocument = $this->arrayNameDocument;
    	$arrayNameLabel = $this->arrayNameLabel;
        return view('admin.sveden.education', compact('educations', 'arrayNameDocument', 'arrayNameLabel'));
    }
    public function edit($id)
    {
    	$education = Education::find($id);
    	$arrayNameDocument = $this->arrayNameDocument;
    	$arrayNameLabel = $this->arrayNameLabel;
    	$arrayNameLabelAddedDocument = $this->arrayNameLabelAddedDocument;
        return view('admin.sveden.educationEdit', compact('education', 'arrayNameDocument', 'arrayNameLabel','arrayNameLabelAddedDocument'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'education_lvl' => 'required',
            'code' => 'required',
            'people_count' => 'required',
            'language' => 'required',
            'educational_accreditation_pdf' => 'nullable|mimes:pdf',
            'practicalKnowladge' => 'nullable|mimes:pdf',
        ]);

    	$education = Education::find($id);
        $data = $request->all();
        foreach ($this->arrayNameDocument as $typeFile){
            if (isset($data[$typeFile])){
                $data[$typeFile] = Education::uploadFile($request, $typeFile);
            }
        }

        $education->update($data);

        return redirect()->route('admin.sveden.education.index')->with('success', 'Изменения сохранены');
    }
}
