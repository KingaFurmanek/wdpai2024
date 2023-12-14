<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/login.css ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="logo">
           <img src="../../public/img/logo.svg">
        </div>
        <div class="login-container">
            <form action="login" method="POST">
                <div class="messages">
                    <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <p>Email</p>
                <input name="email" type="text" placeholder="">
                <p>Password</p>
                <input name="password" type="password" placeholder="">
                <button type="submit" id="loginButton" href="dashboard">Log in</button>
                <a class="sign_up" href="signUp"> Sign up </a>
            </form>
        </div>
    </div>
</body>

</html>