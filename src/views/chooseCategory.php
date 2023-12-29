<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/chooseCategory.css ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <title>ChooseCategory</title>
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
            <div class="quote">
                <h1>Choose category</h1>
            </div>

            <div class="category-container">
                <div class="cupcakes">
                    <img step1 src="../../public/img/cupcakes_category.svg">
                    <div class="checkbox">
                        <input name="choose" type="radio">
                        <p>Cupcakes</p>
                    </div>
                </div>
                <div class="cakes">
                    <img step1 src="../../public/img/cake_category.svg">
                    <div class="checkbox">
                        <input name="choose" type="radio">
                        <p>Cakes</p>
                    </div>
                </div>
                <div class="donuts">
                    <img step1 src="../../public/img/donuts_category.svg">
                    <div class="checkbox">
                        <input name="choose" type="radio">
                        <p>Donuts</p>
                    </div>
                </div>
                <div class="cookies">
                    <img step1 src="../../public/img/cookies_category.svg">
                    <div class="checkbox">
                        <input name="choose" type="radio">
                        <p>Cookies</p>
                    </div>
                </div>
                <div class="highlight"></div>
            </div>
            <button class="next-button">Next</button>

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