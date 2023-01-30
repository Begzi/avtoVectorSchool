<?php

namespace App\Http\Controllers\Admin\Sveden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sveden\Employee;
use App\Models\Sveden\Management;
use App\Models\Sveden\Teacher;

class EmployeeController extends Controller
{
    public function index()
    {
    	$teachers = Teacher::get();
    	$managers = Management::get();
        return view('admin.sveden.employee.employees', compact('teachers', 'managers'));
    }

    public function create()
    {
        return view('admin.sveden.employee.employeesCreate');
    }
        public function store(Request $request)
    {

        $request->validate([
            'employee_id' => 'required',
        ]);
        if ($request['employee_id'] == 1){
	        $request->validate([
	            'fullname' => 'required',
	            'telephone' => 'required',
	            'email' => 'required',
	            'post' => 'required',
	        ]);
        	$data['fullname'] = $request['fullname'];
        	$data['telephone'] = $request['telephone'];
        	$data['email'] = $request['email'];
        	$data['post'] = $request['post'];

        	$manager = Management::create($data);

        }
        elseif ($request['employee_id'] == 2) {
	        $request->validate([
	            'fullname' => 'required',
	            'telephone' => 'required',
	            'email' => 'required',
	            'post' => 'required',
	            'education' => 'required',
	            'work_experience' => 'required',
	        ]);
        	$data['fullname'] = $request['fullname'];
        	$data['telephone'] = $request['telephone'];
        	$data['email'] = $request['email'];
        	$data['post'] = $request['post'];
        	$data['education'] = $request['education'];
        	$data['work_experience'] = $request['work_experience'];

        	$teacher = Teacher::create($data);
        }
        else{
        	return redirect()->route('admin.sveden.employeesCreate')->with('error', 'Не выбран роль сотрудника');
        }

        return redirect()->route('admin.sveden.employees.index')->with('success', 'Сотрудник добавлен');
    }

    public function managerEdit($id)
    {
    	$manager = Management::find($id);
        return view('admin.sveden.employee.managerEdit', compact('manager'));
    }

    public function managerUdate(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'post' => 'required',
        ]);
    	$manager = Management::find($id);
        $data = $request->all();

        $manager->update($data);

        return redirect()->route('admin.sveden.employees.index')->with('success', 'Изменения сохранены');
    }
    public function managerDestroy(Request $request, $id)
    {
        $manager = Management::find($id);
        $manager->delete();

        return redirect()->route('admin.sveden.employees.index')->with('success', 'Сотрудник удалён');
    }

    public function teacherEdit($id)
    {
    	$teacher = Teacher::find($id);
        return view('admin.sveden.employee.teacherEdit', compact('teacher'));
    }

    public function teacherUpdate(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'post' => 'required',
            'education' => 'required',
            'work_experience' => 'required',
        ]);
        $teacher = Teacher::find($id);
        $data = $request->all();

        $teacher->update($data);

        return redirect()->route('admin.sveden.employees.index')->with('success', 'Изменения сохранены');
    }
    public function teacherDestroy(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('admin.sveden.employees.index')->with('success', 'Сотрудник удалён');
    }
}
