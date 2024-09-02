<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $email = "admin@example.com";
    $role = "admin";
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "admin" && $password == "group3") {
        echo "Login successful!";
        header("Location: index.php");
        $_SESSION['user_id'] = $username;
        exit();
    }else{
        echo "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS Login</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="loginHeader">
            <h1>IMS</h1>
            <h3>Inventory Management System</h3>
            <!-- <h1><?php echo $_SESSION['user_id'] ?></h1> -->
        </div>
        <div class="loginBody">
            <form action="login.php" method="POST">
                <div class="inputGroup">
                    <label for="username">USERNAME</label>
                    <input type="text" id="username" name="username" placeholder="username" required />
                </div>
                <div class="inputGroup">
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" name="password" placeholder="password" required />
                </div>
                <div class="inputGroup">
                    <button type="submit">login</button>
                </div>
            </form>    
        </div>
    </div>
</body>
</html>
