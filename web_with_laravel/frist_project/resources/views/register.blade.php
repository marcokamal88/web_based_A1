@extends('master')

@section('content')

<main>
    <div id="register">
    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Create New Account</h3>

            <div>
                <label for="email">Email</label>
                <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" />
                @error('email')
                <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="userName">Username</label>
                <input class="input" type="text" id="userName" name="userName" value="{{ old('userName') }}" />
                @error('userName')
                <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="fname">Full Name</label>
                <input class="input" type="text" id="fname" name="fname" value="{{ old('fname') }}" />
            </div>

            <div>
                <label for="phone">Phone</label>
                <input class="input" type="text" id="phone" name="phone" value="{{ old('phone') }}" />
            </div>

            <div>
                <label for="brithday">Birthdate</label>
                <input class="input" type="date" id="brithday" name="brithday" value="{{ old('brithday') }}" />
            </div>

            <div>
                <label for="address">Address</label>
                <input class="input" type="text" id="address" name="address" value="{{ old('address') }}" />
            </div>

            <div>
                <label for="pwd">Password</label>
                <input class="input" type="password" name="pwd" id="pwd" />
            </div>

            <div>
                <label for="conpwd">Confirm Password</label>
                <input class="input" type="password" name="conpwd" id="conpwd" />
            </div>

            <div>
                <label for="userimg">Image</label>
                <input class="input" type="file" id="userimg" name="userimg" />
            </div>

            <button id="btn">Register</button>
        </form>
    </div>
</main>
@endsection('content')

<link rel="stylesheet" href="\css\header.css">
