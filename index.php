<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registertion</title>
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <?php include "header.php"; ?>

    <div id="register">
        <form action="Controller.php" method="post" enctype="multipart/form-data">
            <h3>Create New Account</h3>

            <div><label for="email">email</label>
                <input class="input" type="email" id="email" name="email" />
            </div>

            <div><label for="user">username</label>
                <input class="input" type="text" id="user" name="user" />
                 <?php if (isset($_GET['worng_username'])) {
                        echo '<span style="color: red;">username must be unique</span>';
                    
                } ?>
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
            <div><label for="userimg">image</label>
                <input class="input" type="file" id="userimg" name="userimg" />
                 <?php if (isset($_GET['upload_error'])) {
                        if ($_GET['upload_error'] == 'wrong_format') {
                            echo '<span style="color: red;">wrong format plz enter format photo like JPG,png,jpeg,gif</span>';
                        } elseif ($_GET['upload_error'] == 'upload_failed') {
                            echo '<span style="color: red;">upload failed</span>';
                        }
                    } ?>
               
            </div>
            <div>
                <div >
                    <label for="Brithday">Brithday</label>
                    <div class="birth">
                        <input class="input" type="date" id="Brithday" name="brithday" />
                        <button type="button" id="btn1" disabled >Actors </button>
                    </div>
                </div>
                <div id="btn_actors">
                </div>
            </div>

            <?php if (isset($_GET['error_in_DB'])) {
                    echo '<span style="color: red;">Something went wrong</span>';
                
            } ?>

            <?php if (isset($_GET['succes'])) {
                    echo '<span style="color:green;">the user regiterd succesfully</span>';
                
            } ?>

            <button id="btn">Register</button>
            <!--  -->
        </form>
    </div>

    <?php include "footer.php"; ?>
    <script src="validation.js"></script>
    <script src="API_Ops.js"></script>
</body>

</html>