<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'userName'          =>  'required|unique:customers',
            'email'         =>  'required|email|unique:customers',
            'userImg'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->userimg->getClientOriginalExtension();

        request()->customer_image->move(public_path('images'), $file_name);

        $customer = new customer;
        $customer->username=$request->input('user');
        $customer->fullname = $request->input('fname');
        $customer->password = $request->input('pwd');
        $customer->addres=$request->input('address');
        $customer->numberPhone=$request->input('phone');
        $customer->brithdate=$request->input('Brithday');
        $customer->email = $request->input('email');
        $customer->userimg = $file_name;
        $customer->save();

        return redirect()->route('customer.index')->with('success', 'customer Added successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        //
    }
}
