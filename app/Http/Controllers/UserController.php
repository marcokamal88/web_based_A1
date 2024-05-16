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
            'userImg'         =>  'image|mimes:jpg,png,jpeg,gif,svg'
        ], [
            'userName.required' => 'The username field is required.',
            'userName.unique' => 'This username is already taken. Please choose a different one.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered. Please use a different email.',
            // 'userimg.required' => 'Please upload an image.',
            'userimg.image' => 'The file must be an image.',
            'userimg.mimes' => 'The image must be a file of type: jpg, png, jpeg, gif, svg.',
            'userimg.max' => 'The image may not be greater than 2048 kilobytes.',
        ]);


        $customer = new User();
        $customer->userName = $request->input('userName');
        $customer->fullName = $request->input('fname');
        $customer->password = $request->input('pwd');
        $customer->address = $request->input('address');
        $customer->numberPhone = $request->input('phone');
        $customer->brithdate = $request->input('brithday');
        $customer->email = $request->input('email');
        if ($request->file('userImg')) {
            $file = $request->file('userImg');
            $file_name = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('images'), $file_name);

            $customer->userImg = $file_name;

        }
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
    public function update(Request $request, User $customer)
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
