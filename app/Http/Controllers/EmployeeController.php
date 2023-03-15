<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function listData(){
        $employee = new Employee;
        $employees = $employee->listRecord();
        return view('employees.index', compact('employees'));
    }

    public function createData(){
    return view('employees.create');
    }

    public function addRecord(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'wattsapp_number' => 'required',
        ]);

   $data = [
       'name' => $request->name,
       'email' => $request->email,
       'phone' => $request->phone,
       'address' => $request->address,
       'wattsapp_number' => $request->wattsapp_number,
       ];
        $employee = new Employee;
        $users = $employee->addRecord($data);
        return redirect('employees/index');
    }

    public function editData($id){
        $employee = new Employee;
        $employee = $employee->getRecord($id);
        return view('employees.edit', compact('employee'));
//        return view('employees.edit');

    }

    public function updateData(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'wattsapp_number' => 'required',
        ]);

         $data = $request->all();
        $employee = new Employee;
        $employee = $employee->updateRecord($data, $id);
        return redirect('employees/index')->with('message',"Updated successfully");

    }

    public function deleteData($id){
        $employee = new Employee;
        $employee = $employee->deleteRecord($id);
        return redirect('employees/index')->with('message',"Delete Successfully ");

    }
}
