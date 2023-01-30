<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Document;

class DocumentController extends Controller
{
	private $arrayNameDocument = [
            'ustavDocLink',
            'licenseDocLink',
            'accreditationDocLink',
            'finPlanDocLink',
            'localActStud',
            'localActOrder',
            'localActCollec',
            'reportEduDocLink',
            'paidEduDocLink',
            'paidEduDogDocLink',
            'paidEduStoimDocLink',
            'prescriptionDocLink',
            'eduProgBLink'
        ];
    private $arrayNameLabel = [
            'Устав образовательной организации (СканФайла, в pdf)',
            'Лицензия на осуществление образовательной деятельности (с приложениями) (СканФайла, в pdf)',
            'Свидетельство о государственной аккредитации (с приложениями) (СканФайла, в pdf)',
            'План финансово-хозяйственной деятельности образовательной организации, утверждённый в установленном законодательством Российской Федерации порядке, или бюджетные сметы образовательной организации (СканФайла, в pdf)',
            'Представительства образовательной организации (СканФайла, в pdf)',
            'Правила внутреннего распорядка обучающихся (СканФайла, в pdf)',
            'Правила внутреннего трудового распорядка (СканФайла, в pdf)',
            'Коллективный договор (СканФайла, в pdf)',
            'Документ о порядке оказания платных образовательных услуг (СканФайла, в pdf)',
            'Образец договора об оказании платных образовательных услуг (СканФайла, в pdf)',
            'Документ об утверждении стоимости обучения по каждой образовательной программе (СканФайла, в pdf)',
            'Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования (СканФайла, в pdf)',
            'Учебная программа категории "В" (СканФайла, в pdf)'
        ];
    private $arrayNameLabelAddedDocument = [
            'Добавленный устав образовательной организации',
            'Добавленная лицензия на осуществление образовательной деятельности (с приложениями)',
            'Добавленное свидетельство о государственной аккредитации (с приложениями)',
            'Добавленный план финансово-хозяйственной деятельности образовательной организации, утверждённый в установленном законодательством Российской Федерации порядке, или бюджетные сметы образовательной организации',
            'Добавленная информация представительства образовательной организации',
            'Добавленная информация правил внутреннего распорядка обучающихся',
            'Добавленная информация правил внутреннего трудового распорядка',
            'Добавленный коллективный договор',
            'Добавленный документ о порядке оказания платных образовательных услуг',
            'Добавленный образец договора об оказании платных образовательных услуг',
            'Добавленный документ об утверждении стоимости обучения по каждой образовательной программе',
            'Добавленная предписания органов, осуществляющих государственный контроль (надзор) в сфере образования',
            'Добавленная учебная программа категории "В"'
        ];

    public function index()
    {
    	$documents = Document::get();
    	$arrayNameDocument = $this->arrayNameDocument;
    	$arrayNameLabel = $this->arrayNameLabel;
    	$arrayNameLabelAddedDocument = $this->arrayNameLabelAddedDocument;
        return view('admin.sveden.document', compact('documents', 'arrayNameDocument', 
                'arrayNameLabel', 'arrayNameLabelAddedDocument'));
    }
    public function edit($id)
    {
        $document = Document::find($id);
    	$arrayNameDocument = $this->arrayNameDocument;
    	$arrayNameLabel = $this->arrayNameLabel;
    	$arrayNameLabelAddedDocument = $this->arrayNameLabelAddedDocument;
        return view('admin.sveden.documentEdit', 
            compact('document', 'arrayNameDocument', 
                'arrayNameLabel', 'arrayNameLabelAddedDocument'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'ustavDocLink' => 'nullable|mimes:pdf',
            'licenseDocLink' => 'nullable|mimes:pdf',
            'accreditationDocLink' => 'nullable|mimes:pdf',
            'finPlanDocLink' => 'nullable|mimes:pdf',
            'localActStud' => 'nullable|mimes:pdf',
            'localActOrder' => 'nullable|mimes:pdf',
            'localActCollec' => 'nullable|mimes:pdf',
            'reportEduDocLink' => 'nullable|mimes:pdf',
            'paidEduDocLink' => 'nullable|mimes:pdf',
            'paidEduDogDocLink' => 'nullable|mimes:pdf',
            'paidEduStoimDocLink' => 'nullable|mimes:pdf',
            'prescriptionDocLink' => 'nullable|mimes:pdf',
            'eduProgBLink' => 'nullable|mimes:pdf',
        ]);
        $document = Document::find($id);
        $data = $request->all();
        foreach ($this->arrayNameDocument as $typeFile){
            if (isset($data[$typeFile])){
                $data[$typeFile] = Document::uploadFile($request, $typeFile);
            }
        }

        $document->update($data);

        return redirect()->route('admin.sveden.document.index')->with('success', 'Изменения сохранены');
    }
    public function editPaidEdu($id)
    {
        $document = Document::find($id);
        $arrayNameDocument = [
            'paidEduDocLink',
            'paidEduDogDocLink'
        ];
        $arrayNameLabel = [
            'Документ о порядке оказания платных образовательных услуг (СканФайла, в pdf)',
            'Образец договора об оказании платных образовательных услуг (СканФайла, в pdf)',
        ];
        $arrayNameLabelAddedDocument = [
            'Добавленный документ о порядке оказания платных образовательных услуг',
            'Добавленный образец договора об оказании платных образовательных услуг',
        ];
        return view('admin.sveden.documentEdit', 
            compact('document', 'arrayNameDocument', 
                'arrayNameLabel', 'arrayNameLabelAddedDocument'));
    }
    public function updatePaidEdu(Request $request, $id)
    {
        $request->validate([
            'paidEduDocLink' => 'nullable|mimes:pdf',
            'paidEduDogDocLink' => 'nullable|mimes:pdf',
        ]);
        $array_check = [
            'paidEduDocLink',
            'paidEduDogDocLink',
        ];
        $document = Document::find($id);
        $data = $request->all();
        foreach ($array_check as $typeFile){
            if (isset($data[$typeFile])){
                $data[$typeFile] = Document::uploadFile($request, $typeFile);
            }
        }

        $document->update($data);

        return redirect()->route('admin.sveden.paidEdu.index')->with('success', 'Изменения сохранены');
    }
}
