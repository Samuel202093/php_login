<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>login system in php</title>
</head>
<body>
    <div class="form_wrapper">
    <h3>Login</h3>

    <form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="pwd" placeholder="password">
    <button>Login</button>
    </form>

    <hr>

    <h3>Sign up</h3>

    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <input type="email" name="email" placeholder="Email">
        <button>signup</button>
    </form>

    <?php 
        check_signup_errors()
    ?>
    </div>
</body>
</html>