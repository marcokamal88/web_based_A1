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
            <form action="DB_Ops.php" method="post" enctype="multipart/form-data">

                <h3>Create New Account</h3>

                <label for="email">email</label>
                <input class="input" type="email" id="email" name="email">

                <label for="user">username</label>
                <input class="input" type="text" id="user" name="user">

                <label for="fname">full name</label>
                <input class="input" type="text" id="fname" name="fname">
                <label for="phone">phone</label>
                <input class="input" type="text" id="phone" name="phone">
                <label for="Brithday">Brithday</label>
                <input class="input" type="date" id="Brithday" name="brithday">
                <label for="address">Address</label>
                <input class="input" type="text" id="address" name="address">
                <label for="pwd">Password</label>
                <input class="input" type="password" id="pwd" name="pwd">
                <label for="conpwd">confirm Password</label>
                <input class="input" type="password" id="conpwd" name="conpwd">
                <label for="userimg">image</label>
                <input class="input" type="file" id="userimg" name="userimg">
                <button id="btn">Register</button>
            </form>
        </div>

    <?php include "footer.php"; ?>
</body>

</html>