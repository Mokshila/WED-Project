<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private ProductService $service;
    public function __construct(ProductService $Service){
        $this->service= $Service;
    }
    public function index(){
        $products=$this->service->getAll();
        return view('module.event.index',compact('products'));
    }
    public function create(){
        return view('module.event.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'code' =>'string',
            'name' =>'string',
            'category' =>'string',
            'quantity' =>'integer',
            'price' =>'numeric',
        ]);
        $this->service->create($validatedData);
        return redirect(url('/event'))->with('success','Event created successfully');
    }
    public function show($id){
      $products=$this->service->findById($id);
      return view('module.event.update',compact('products'));
    }
    public function update(Request $request){
       $validatedData = $request->validate([
           'code' =>'string',
           'name' =>'string',
           'category' =>'string',
           'quantity' =>'integer',
           'price' =>'numeric',
       ]);
       $this->service->update($validatedData);
       return redirect(url('/event'))->with('success','Event updated successfully');
    }
    public function destroy($id){
        $this->service->delete($id);
        return redirect(url('/event'))->with('success','Event deleted successfully');
    }
}
