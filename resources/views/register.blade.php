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

                <div><label for="email">email</label>
                    <input class="input" type="email" id="email" name="email" />
                </div>

                <div><label for="user">username</label>
                    <input class="input" type="text" id="user" name="userName" />

                    <span style="color: red;"> 
                        <?php  if(isset($_GET['error'])){if($_GET['error']=='worng_username'){
                            echo"username must be unique";}
                        } ?>
                    </span>
                </div>

                <div><label for="fname">full name</label>
                    <input class="input" type="text" id="fname" name="fname" />

                </div>
                <div><label for="phone">phone</label>
                    <input class="input" type="text" id="phone" name="phone" />

                </div>
                <div><label for="Brithday">Brithday</label>
                    <input class="input" type="date" id="Brithday" name="brithday" />

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
                <div><label for="userimg">image</label>
                    <input class="input" type="file" id="userimg" name="userImg" />

                    <span style="color: red;"> 
                    <?php if(isset($_GET['error'])){
                        if($_GET['error']=='wrong_format'){
                            echo"wrong format plz enter format photo like JPG,png,jpeg,gif";
                        }
                        elseif($_GET['error']=='upload_failed'){echo "upload_failed";}
                    }
                    ?>
                    </span>
                    <span style="color:green;">
                        <?php if(session('success')){
                            echo "Registered successfully!";
                        }?>
                    </span>
                </div>
                <button id="btn">Register</button>
                <!--  -->
            </form>
        </div>
        <script src="\js\validation.js"></script>

    </main>

@endsection('content')
