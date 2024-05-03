<!DOCTYPE html>
<html>
<head>
    <title>Sign uo</title>
    <link rel=stylesheet href="sign_up.css">
</head>
<body>
    <div class="form-box">
        <form class="form" action="connect.php" method="POST">
            <div class="form_container">
                <input required type="text" class="input" placeholder="Enter your full name" name="name">
                <input required type="email" class="input" placeholder="Enter your email" name="email">
                <input required type="password" class="input" placeholder="Enter your password" name="password">
                <input type="submit" value="Sign up" class="submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
