<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = new Customer();
        return view('customers.create', compact('customers'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validateRequest();
        $customers = new Customer();
        $customers->name = request('name');
        $customers->address = request('address');
        $customers-> save();
        
        Session::flash('flash_message', 'New record saved');
        Session::flash('flash_type', 'alert-success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $customers=Customer::find($id);
        return view('customers.edit', compact('customers'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateRequest();
        $customers = Customer::find($id);
        $customers -> name= request('name');
        $customers -> address= request('address');
        $customers -> update();
        Session::flash('flash_message', 'Record Updated');
        Session::flash('flash_type', 'alert-success');
        return back();
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers -> delete();
        return back();
        
        
    }
    
    private function validateRequest(){
        return tap(request()->validate(         
            [
                'name' => 'required|min:3',
                'address' => 'required|min:3',
            ]
        ));
    }
}
