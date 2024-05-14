<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
      */
    // use App\Validation\UserValidation;
    // protected $UserValidation;

    //  public function __constructor(UserValidation $UserValidation){
    //     $this->UserValidation          = $UserValidation;

    //  } 
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
        $validator = $request->validate([
            'userName' => 'required|unique:customers',
            'email' => 'required|email|unique:customers',
            'userimg' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
            'userName.required' => 'The username field is required.',
            'userName.unique' => 'This username is already taken. Please choose a different one.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered. Please use a different email.',
            'userimg.required' => 'Please upload an image.',
            'userimg.image' => 'The file must be an image.',
            'userimg.mimes' => 'The image must be a file of type: jpg, png, jpeg, gif, svg.',
            'userimg.max' => 'The image may not be greater than 2048 kilobytes.',
        ]);
        
    
        $file_name = time() . '.' . request()->userimg->getClientOriginalExtension();
    
        $request->userimg->move(public_path('images'), $file_name);
    
        $customer = new customer;
        $customer->userName = $request->input('userName');
        $customer->fullname = $request->input('fname');
        $customer->password = $request->input('pwd');
        $customer->address = $request->input('address');
        $customer->numberPhone = $request->input('phone');
        $customer->brithdate = $request->input('brithday');
        $customer->email = $request->input('email');
        $customer->userimg = $file_name;
        $customer->save();
    
        return redirect()->route('customer.index')->with('success', 'Customer added successfully.');
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
