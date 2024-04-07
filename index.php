<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registertion</title>
    <link rel="stylesheet" href="header.css">
</head>
<!--  -->
<body>
    <?php include "header.php"; ?>
    <div id="register">
        <form action="DB_Ops.php" method="post" enctype="multipart/form-data">
            <h3>Create New Account</h3>

            <div><label for="email">email</label>
                <input class="input" type="email" id="email" name="email" />
            </div>

            <div><label for="user">username</label>
                <input class="input" type="text" id="user" name="user" />
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
                <input class="input" type="password"  name="pwd"  id="pwd" value="ppppp"/>
            </div>
            <div ><label for="conpwd">confirm Password</label>
                <input class="input" type="password"  name="conpwd" id="conpwd" value="hhhhh"/>
            </div>
            <div><label for="userimg">image</label>
                <input class="input" type="file" id="userimg" name="userimg" />
            </div>
            <button id="btn" onclick="emptyFields()">Register</button>
            <!--  -->
        </form>
    </div>

    <?php include "footer.php"; ?>
    <script src="validation.js"></script>
</body>

</html>