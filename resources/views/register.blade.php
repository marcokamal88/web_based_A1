@extends('master')
@section("title","register")


@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>

@endif

<main>
    <div id="register">
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Create New Account</h3>

            <div>
                <label for="email">Email</label>
                <input class="input" type="email" id="email" name="email" />
                @error('email')
                <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="userName">Username</label>
                <input class="input" type="text" id="userName" name="userName" />
                @error('userName')
                <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>


            <div><label for="fname">full name</label>
                <input class="input" type="text" id="fname" name="fname" />

            </div>
            <div><label for="phone">phone</label>
                <input class="input" type="text" id="phone" name="phone" />

            </div>


            <div><label for="address">Address</label>
                <input class="input" type="text" id="address" name="address" />

            </div>
            <div><label for="pwd">Password</label>
                <input class="input" type="password" name="pwd" id="pwd" />

            </div>
            <div><label for="conpwd">confirm Password</label>
                <input class="input" type="password" name="conpwd" id="conpwd" />
            </div>
            <div>
                <label for="userimg">image</label>
                <input class="input" type="file" id="userimg" name="userImg" />

                <span style="color: red;">
                    <?php if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'wrong_format') {
                            echo "wrong format plz enter format photo like JPG,png,jpeg,gif";
                        } elseif ($_GET['error'] == 'upload_failed') {
                            echo "upload_failed";
                        }
                    }
                    ?>
                </span>

            </div>

            <div>
                <div>
                    <label for="Brithday">Brithday</label>
                    <div class="birth">
                        <input class="input" type="date" id="Brithday" name="brithday" />
                        <button type="button" id="btn1" disabled>Actors </button>
                    </div>
                </div>
                <div id="btn_actors">
                </div>
            </div>

            <?php if (session('success')) {
                echo '<span style="color:green;">' . session('success') . '</span>';
            } ?>

            <button id="btn">Register</button>
            <!--  -->
        </form>
    </div>
    <script src="\js\validation.js"></script>
    <script src="\js\API_Ops.js"></script>

</main>

@endsection('content')