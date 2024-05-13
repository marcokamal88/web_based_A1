<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\newuser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
            'userName'          =>  'required|unique:users',
            'email'         =>  'required|email|unique:users',
            'userImg'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $file = $request->file('userImg');

        $file_name = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('images'), $file_name);

        $customer = new User();
        $customer->userName=$request->input('userName');
        $customer->fullName = $request->input('fname');
        $customer->password = $request->input('pwd');
        $customer->address=$request->input('address');
        $customer->numberPhone=$request->input('phone');
        $customer->brithdate=$request->input('brithday');
        $customer->email = $request->input('email');
        $customer->userImg = $file_name;
        $customer->save();
        $customer->notify(new newuser($customer));

        return redirect()->back()->with('success', 'Registered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $customer)
    {
        //
    }
}