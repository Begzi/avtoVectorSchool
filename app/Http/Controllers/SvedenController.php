<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sveden\Budget;
use App\Models\Sveden\Common;
use App\Models\Sveden\Document;
use App\Models\Sveden\Education;
use App\Models\Sveden\EducationStandart;
use App\Models\Sveden\Employee;
use App\Models\Sveden\Grant;
use App\Models\Sveden\Management;
use App\Models\Sveden\ObjectsSchool;
use App\Models\Sveden\PaidEducation;
use App\Models\Sveden\Struct;
use App\Models\Sveden\Teacher;
use App\Models\Sveden\Vacancy;

class SvedenController extends Controller
{
    public function sveden()
    {
        return view('sveden.index');
    }
    public function common()
    {
    	$sveden = true;
    	$commons = Common::get();
    	$common = $commons[0];
        return view('sveden.common', compact('sveden', 'common'));
    }
    public function struct()
    {
    	$sveden = true;
    	$structs = Struct::get();
    	$struct = $structs[0];
        return view('sveden.struct', compact('sveden', 'struct'));
    }
    public function document()
    {
    	$sveden = true;
    	$documents = Document::get();
        $arrayNameDocument = [
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
    $arrayNameLabel = [
            'Устав образовательной организации',
            'Лицензия на осуществление образовательной деятельности (с приложениями)',
            'Свидетельство о государственной аккредитации (с приложениями)',
            'План финансово-хозяйственной деятельности образовательной организации, утверждённый в установленном законодательством Российской Федерации порядке, или бюджетные сметы образовательной организации',
            'Представительства образовательной организации',
            'Правила внутреннего распорядка обучающихся',
            'Правила внутреннего трудового распорядка',
            'Коллективный договор',
            'Документ о порядке оказания платных образовательных услуг',
            'Образец договора об оказании платных образовательных услуг',
            'Документ об утверждении стоимости обучения по каждой образовательной программе',
            'Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования',
            'Учебная программа категории "В"'
        ];
        return view('sveden.document', compact('sveden', 'documents', 'arrayNameDocument', 'arrayNameLabel'));
    }
    public function education()
    {
    	$sveden = true;
    	$educations = Education::get();
        $education = $educations[0];
        $arrayNameDocument = [
                'educational_accreditation_pdf',
                'practicalKnowladge',
            ];
        $arrayNameLabel = [
            'Лицензия на осуществление образовательной деятельности (с приложениями) (СканФайла, в pdf)',
            'Практические навыки (СканФайла, в pdf)',
        ];
        return view('sveden.education', compact('sveden', 'education','arrayNameDocument', 'arrayNameLabel'));
    }
    public function eduStandarts()
    {
    	$sveden = true;
    	$eduStandarts = EducationStandart::get();
    	$eduStandart = $eduStandarts[0];
        return view('sveden.eduStandarts', compact('sveden', 'eduStandart'));
    }
    public function employees()
    {
    	$sveden = true;
        $managers = Management::get();
        $teachers = Teacher::get();  
        return view('sveden.employees', compact('sveden', 'teachers', 'managers'));
    }
    public function objects()
    {
    	$sveden = true;
    	$objects = ObjectsSchool::get();
    	$object = $objects[0];        
    	return view('sveden.objects', compact('sveden', 'object'));
    }
    public function grants()
    {
    	$sveden = true;
    	$grants = Grant::get();
    	$grant = $grants[0];
        return view('sveden.grants', compact('sveden', 'grant'));
    }
    public function paidEdu()
    {
    	$sveden = true;
    	$paidEdus = PaidEducation::get();
    	$paidEdu = $paidEdus[0];
    	$documents = Document::get();
    	$document = $documents[0];
        return view('sveden.paidEdu', compact('sveden', 'paidEdu', 'document'));
    }
    public function budget()
    {
    	$sveden = true;
    	$budgets = Budget::get();
    	$budget = $budgets[0];
        return view('sveden.budget', compact('sveden', 'budget'));
    }
    public function vacant()
    {
    	$sveden = true;
    	$sveden = true;
    	$vacants = Vacancy::get();
    	$vacant = $vacants[0];
        return view('sveden.vacant', compact('sveden', 'vacant'));
    }
}
