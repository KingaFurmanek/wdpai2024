<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/orderForm.css ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <script src="../script.js"></script>
    <title>Ordering</title>
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
            <div class="order-container">
                <form>
                    <p>Ocasion</p>
                    <input name="ocasion" type="text" placeholder="Type in ocasion">
                    <p>Quantity</p>
                    <input name="quantity" type="text" placeholder="Type in quantity">
                    <p>Flavours (max. 3)</p>
                    <div class="custom-checkboxes">
                        <label for="chocolate">
                            <input type="checkbox" id="chocolate" value="chocolate">
                            Chocolate
                        </label>
                        <label for="strawberry">
                            <input type="checkbox" id="strawberry" value="strawberry">
                            Strawberry
                        </label>
                        <label for="banana">
                            <input type="checkbox" id="banana" value="banana">
                            Banana
                        </label>
                        <label for="nutella">
                            <input type="checkbox" id="nutella" value="nutella">
                            Nutella
                        </label>
                        <label for="raspberry">
                            <input type="checkbox" id="raspberry" value="raspberry">
                            Raspberry
                        </label>
                        <label for="cherry">
                            <input type="checkbox" id="cherry" value="cherry">
                            Cherry
                        </label>
                        <label for="vanilla">
                            <input type="checkbox" id="vanilla" value="vanilla">
                            Vanilla
                        </label>
                    </div>
                    <p>Main Colours</p>
                    <input name="colours" type="text" placeholder="Type in colours">
                    <p>Delivery Date</p>
                    <input name="date" type="text" placeholder="DD/MM/YY" pattern="\d{2}/\d{2}/\d{2}">
                    <p>Additional Info</p>
                    <input name="Additional Info" type="text" placeholder="Type in any additional info">
                </form>
                <button class="send-button">Send</button>
            </div>

            <nav class="navbar-bottom">
                <ul>
                    <a>About Us</a>
                    <a>Contact</a>
                </ul>
                <div class="media">
                    <img src="../../public/img/facebook.svg">
                    <img src="../../public/img/instagram.svg">
                    <img src="../../public/img/twitter.svg">
                </div>
                <script src="../script.js"></script>

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
            </nav>
        </main>


    </div>
</body>

</html>