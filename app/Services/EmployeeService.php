<?php

namespace App\Services;

use App\Models\Employee;

class EmployeeService
{
        public function create(array $data){
            $employee_data=[
                'name'=>$data['name'],
                'nic'=>$data['nic'],
                'address'=>$data['address'],
                'gender'=>$data['gender'],
                'position'=>$data['position'],
                'num'=>$data['num'],
                'email'=>$data['email'],
            ];
            Employee::create($employee_data);
        }
    public function getAll(){
        $employees=Employee::all();
        return $employees;
    }
    public function findById($id){
        $employees=Employee::find($id);
        return $employees;
    }
    public function update(array $data){

        $id=$data['id'];
        $employees=Employee::find($id);
        $employees->code=$data['name'];
        $employees->name=$data['nic'];
        $employees->address=$data['address'];
        $employees->category=$data['gender'];
        $employees->quantity=$data['position'];
        $employees->price=$data['num'];
        $employees->email=$data['email'];
        $employees->save();
    }
    public function delete($id){
        $employees=Employee::find($id);
        $employees->delete();
    }
}
