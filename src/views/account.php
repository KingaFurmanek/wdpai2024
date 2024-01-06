<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['name'])) {
    $userName = htmlspecialchars($_SESSION['name']);
} else {
    $userName = ''; //default value
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/account.css ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <title>My Account</title>
</head>

<body>
    <div class="container">
        <nav>
            <h2>Cake Joy</h2>
            <div class="menu">
                <ul>
                    <a href="dashboard">HOME</a>
                    <a href="chooseCategory">ORDER</a>
                    <a href="account">ACCOUNT</a>
                </ul>
                <div class="logo">
                    <img src="../../public/img/logo_withoutBackground.svg">
                </div>
            </div>
        </nav>

        <main>

            <div class="account-container">
                <div class="login">
                    <img step1 src="../../public/img/login.svg">
                    <p><?php echo $userName; ?></p>
                </div>
                <div class="data-container">
                    <div class="element">
                        <img step1 src="../../public/img/myOrdersAccount.svg">
                        <a class="my_orders" href="signUp"> My Orders </a>
                    </div>
                    <div class="element">
                        <img step1 src="../../public/img/myAddressAccount.svg">
                        <a class="my_address" href="signUp"> Address Book </a>
                    </div>
                    <div class="element">
                        <img step1 src="../../public/img/logOutAccount.svg">
                        <a class="log_out" href="signUp"> Log Out </a>
                    </div>
                </div>
            </div>

        </main>
        <div class="navbar-bottom">
            <ul>
                <a>About Us</a>
                <a>Contact</a>
            </ul>
            <div class="media">
                <img src="../../public/img/facebook.svg">
                <img src="../../public/img/instagram.svg">
                <img src="../../public/img/twitter.svg">
            </div>

            <div class="media-navbar">
                <button class="home-button">
                    <img src="../../public/img/home_media_button.svg">
                </button>
                <button class="order-media-button">
                    <img src="../../public/img/order_media_button.svg">
                </button>
                <button class="account-button">
                    <img src="../../public/img/account_media_button.svg">
                </button>
            </div>
        </div>
    </div>
</body>

</html>