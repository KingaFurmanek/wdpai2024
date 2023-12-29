<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/signUp.css ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <title>SIGN UP</title>
</head>

<body>
    <div class="container">
        <div class="signUp-container">
            <form method="POST">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <p>Name</p>
                <input name="name" type="text" placeholder="">
                <p>Surname</p>
                <input name="surname" type="text" placeholder="">
                <p>Email</p>
                <input name="email" type="text" placeholder="">
                <p>Password</p>
                <input name="password" type="password" placeholder="">
                <p>Country</p>
                <input name="country" type="text" placeholder="">
                <p>Post Code</p>
                <input name="postcode" type="text" placeholder="">
                <p>City</p>
                <input name="city" type="text" placeholder="">
                <p>Street</p>
                <input name="street" type="text" placeholder="">
                <p>Flat number / House number</p>
                <input name="number" type="text" placeholder="">
                <button type="submit" id="signUpButton" href="login">Sign up</button>
            </form>
        </div>
    </div>
</body>

</html>