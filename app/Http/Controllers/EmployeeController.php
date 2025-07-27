<?php

namespace App\Http\Controllers;

use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private EmployeeService $service;
    public function __construct(EmployeeService $Service)
    {
        $this->service = $Service;
    }
   public function index2(){
        $employees=$this->service->getAll();
      return view('module.employee.index2',compact('employees'));
   }
   public function create2(){
       return view('module.employee.create2');
   }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'string',
            'nic' => 'string',
            'address' => 'string',
            'gender' => 'string',
            'position' => 'string',
            'num' => 'integer',
            'email' => 'string',
        ]);
        $this->service->create2($validatedData);
        return redirect(url('/employee'))->with('success', 'Event created successfully');
    }
    public function show($id){
        $employees=$this->service->findById($id);
        return view('module.employee.update',compact('employees'));
    }
    public function update(Request $request){
        $validatedData = $request->validate([
            'name' => 'string',
            'nic' => 'string',
            'address' => 'string',
            'gender' => 'string',
            'position' => 'string',
            'num' => 'integer',
            'email' => 'string',
        ]);
        $this->service->update($validatedData);
        return redirect(url('/employee'))->with('success','Event updated successfully');
    }
    public function destroy($id){
        $this->service->delete($id);
        return redirect(url('/employee'))->with('success','Event deleted successfully');
    }
}
