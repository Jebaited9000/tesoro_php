<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h1>User Login</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = "uc@gmail.com";
    $password = "ucban123";

    $input_email = $_POST['email'];
    $input_password = $_POST['password'];

    if($input_email === $email && $input_password === $password){
        echo '<script>alert("Logged in succesful!");</script>';
    } else {
        echo '<script>alert("Email or password entered is incorrect.");</script>';
    }
}

?>