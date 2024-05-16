@extends('master')
@section("title","register")


@section('content')




<main>
    <div id="register">
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <h3>@lang("content.create_Acc")</h3>
            <div>
                <label for="email">@lang("content.email")</label>
                <input class="input" type="email" id="email" name="email" />
                @error('email')
                <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="user">@lang("content.username")</label>
                <input class="input" type="text" id="user" name="userName" />
                @error('userName')
                <span style="color: red;">{{ $message }}</span>
                @enderror

            </div>

            <div>
                <label for="fname">@lang("content.full_name")</label>
                <input class="input" type="text" id="fname" name="fname" />
            </div>

            <div>
                <label for="phone">@lang("content.phone")</label>
                <input class="input" type="text" id="phone" name="phone" />
            </div>

            <div>
                <label for="address">@lang("content.address")</label>
                <input class="input" type="text" id="address" name="address" />
            </div>

            <div>
                <label for="pwd">@lang("content.password")</label>
                <input class="input" type="password" name="pwd" id="pwd" />
            </div>

            <div>
                <label for="conpwd">@lang("content.confirm_password")</label>
                <input class="input" type="password" name="conpwd" id="conpwd" />
            </div>

            <div>
                <label for="userimg">@lang("content.image")</label>
                <input class="input" type="file" id="userimg" name="userImg" />

                @error('userimg')
                <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <div>
                    <label for="Brithday">@lang("content.birthday")</label>
                    <div class="birth">
                        <input class="input" type="date" id="Brithday" name="brithday" />
                        <button type="button" id="btn1" disabled>@lang("content.actors_button")</button>

                    </div>
                </div>
                <div id="btn_actors">
                </div>
            </div>

            <button id="btn">@lang("content.register_button")</button>

            <!--  -->
        </form>
    </div>
    <script src="\js\validation.js"></script>
    <script src="\js\API_Ops.js"></script>

</main>

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