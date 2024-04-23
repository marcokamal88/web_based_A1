<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registertion</title>
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <div id="register">
        <form action="Controller.php" method="post" enctype="multipart/form-data">
            <h3>Create New Account</h3>

            <div><label for="email">email</label>
                <input class="input" type="email" id="email" name="email" />
            </div>

            <div><label for="user">username</label>
                <input class="input" type="text" id="user" name="user" />
                <span style="color: red;"> <?php if (isset($_GET['error'])) {
                                                if ($_GET['error'] == 'worng_username') {
                                                    echo "username must be unique";
                                                }
                                            } ?></span>
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
                <input class="input" type="password" name="pwd" id="pwd" value="ppppp" />
            </div>
            <div><label for="conpwd">confirm Password</label>
                <input class="input" type="password" name="conpwd" id="conpwd" value="hhhhh" />
            </div>
            <div><label for="userimg">image</label>
                <input class="input" type="file" id="userimg" name="userimg" />
                <span style="color: red;"> <?php if (isset($_GET['error'])) {
                                                if ($_GET['error'] == 'wrong_format') {
                                                    echo "wrong format plz enter format photo like JPG,png,jpeg,gif";
                                                } elseif ($_GET['error'] == 'upload_failed') {
                                                    echo "upload_failed";
                                                }
                                            } ?></span>
                <span style="color:green;"><?php if (isset($_GET['succes'])) {
                                                if ($_GET['succes'] == 'successful_action') {
                                                    echo "the user regiterd succesfully";
                                                }
                                            } ?></span>
            </div>
            <div >
                <div id="append">
                    <label for="Brithday">Brithday</label>
                    <div class="birth">
                        <input class="input" type="date" id="Brithday" name="brithday" />
                        <button type="button" id="btn1" >Actors names </button>
                    </div>
                </div>
                <div id="btn_actors">
                </div>
            </div>
            <button id="btn" onclick="emptyFields()">Register</button>
            <!--  -->
        </form>
    </div>

    <?php include "footer.php"; ?>
    <script src="validation.js"></script>
    <script src="API_Ops.js"></script>
</body>

</html>