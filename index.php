<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $strPattern = '/^[a-zA-Z]+$/';
    $pwdPattern = '/^(?=.*\d)(?=.*[\W_]).{8,}$/';
    if (empty($_POST['fname'])) {
        $fullName_error = '*please inter your full name';
    }
    if (!preg_match($strPattern, $_POST['fname'])) {
        $fullName_error = '*invalid input';
    }
    if (empty($_POST['user'])) {
        $userName_error = '*please inter your username';
    }
    if (empty($_POST['phone'])) {
        $phone_error = '*please inter your phone';
    }
    if (empty($_POST['brithday'])) {
        $BirthDate_error = '*please inter your BirthDate';
    }
    if (empty($_POST['address'])) {
        $address_error = '*please inter your address';
    }
    if (empty($_POST['pwd'])) {
        $pwd_error = '*please inter your password';
    }
    if (!preg_match($pwdPattern, $_POST['pwd'])) {
        $pwd_error = '*invalid password';
    }
    if (empty($_POST['email'])) {
        $email_error = '*please enter your email';
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }
}

?>

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
    <main>
        <div id="register">
            <form action="" method="post">
                <label for="fname">full name:</label><br>
                <input class="input" type="text" id="fname" name="fname">
                <?php if (isset($fullName_error)) echo "<span class='inputError' > $fullName_error </span>"; ?>
                <br>
                <label for="user">username:</label><br>
                <input class="input" type="text" id="user" name="user">
                <?php if (isset($userName_error)) echo '<span class="inputError"> ' . $userName_error . ' </span>'; ?>
                <br>
                <label for="phone">phone:</label><br>
                <input class="input" type="text" id="phone" name="phone">
                <?php if (isset($phone_error)) echo '<span class="inputError"> ' . $phone_error . ' </span>'; ?>
                <br>
                <label for="Brithday">Brithday:</label><br>
                <input class="input" type="date" id="Brithday" name="brithday">
                <?php if (isset($BirthDate_error)) echo '<span class="inputError"> ' . $BirthDate_error . ' </span>'; ?>
                <br>
                <label for="address">Address:</label><br>
                <input class="input" type="text" id="address" name="address">
                <?php if (isset($address_error)) echo '<span class="inputError"> ' . $address_error . ' </span>'; ?>
                <br>
                <label for="pwd">Password:</label><br>
                <input class="input" type="password" id="pwd" name="pwd">
                <?php if (isset($pwd_error)) echo '<span class="inputError"> ' . $pwd_error . ' </span>'; ?>
                <br>
                <label for="conpwd">confirm Password:</label><br>
                <input class="input" type="password" id="conpwd" name="conpwd">
                <?php if (isset($pwd_error)) echo '<span class="inputError"> ' . $pwd_error . ' </span>'; ?>
                <br>
                <label for="email">email:</label><br>
                <input class="input" type="email" id="email" name="email">
                <?php if (isset($email_error)) echo '<span class="inputError"> ' . $email_error . ' </span>'; ?>
                <br>
                <label for="userimg">image for you:</label><br>
                <input class="input" type="file" id="userimg" name="userimg"><br>

                <button id="btn">Register</button>
                <br>
            </form>
        </div>
    </main>

    <?php include "footer.php"; ?>
</body>

</html>