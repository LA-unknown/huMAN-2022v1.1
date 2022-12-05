<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="gueststyles.css">
    <title>Document</title>
</head>

<body>
    <div class="hero-section">
        <div class="bunos-day">
            <div class="bunos-day-left">
                <p>BONUS DAY | 50% OFF ENTIRE SITE | 100s OF STYLE STEALS + FREE SHIPPING! Online only. <u>Exclusions &
                        Details</u> <u>MEN</u></p>
            </div>
            <div class="bunos-day-right">
                <p><u>Enable Accessibility</u></p>
            </div>
        </div>
        <div class="top-nav">
            <div class="top-nav-left">
                <p>Free Shipping on All OrdersDetails</p>
            </div>
            <div class="top-nav-center">
                <h1><b>huMAN</b></h1>
            </div>
            <div class="top-nav-right">
                <i onclick="show_hide_searhtab()" class="fa fa-magnifying-glass"></i>
                <i class="fa fa-bag-shopping"></i>
                <i onclick="show_hide_logintab()" class="fa-regular fa-user"></i>
            </div>
        </div>
        <div id="mens-section" class="mens-section">
            <div class="bottom-nav">
                <p onclick="mens_section()"><b><u>Mens</u></b></p>
                <p onclick="longsleeves_section()"><b>Long Sleeves</b></p>
                <p onclick="suitwithpants_section()"><b>Suits w/ Pants</b></p>
                <p onclick="shoes_section()"><b>Shoes</b></p>
                <p onclick="watches_section()"><b>Watches</b></p>
                <p onclick="necklaces_section()"><b>Necklaces</b></p>
                <p onclick="bags_section()"><b>Bags</b></p>
            </div>
            <div class="mens-background">
                <Button>Shop Now!!!</Button>
                <p><b>Show yourself and be an ALPHA</b></p>
            </div>
        </div>
    </div>
    <div id="longsleeves-section" class="longsleeves-section">
        <div class="bottom-nav">
            <p onclick="mens_section()"><b>Mens</b></p>
            <p onclick="longsleeves_section()"><b><u>Long Sleeves</u></b></p>
            <p onclick="suitwithpants_section()"><b>Suits w/ Pants</b></p>
            <p onclick="shoes_section()"><b>Shoes</b></p>
            <p onclick="watches_section()"><b>Watches</b></p>
            <p onclick="necklaces_section()"><b>Necklaces</b></p>
            <p onclick="bags_section()"><b>Bags</b></p>
        </div>
        <div class="sales-content-layout">
            <div class="list-items">
                <div class="item1">
                    <div class="images">
                        <img src="./images/LongSleeves/item1.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Plain Long Sleeve Polos</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item2">
                    <div class="images">
                        <img src="./images/LongSleeves/item2.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Long Sleeve Shirt with Turtle Neck</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item3">
                    <div class="images">
                        <img src="./images/LongSleeves/item3.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Stripes Long Sleeve Polos</p>
                        </div>
                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see-more">
                <button>SEE MORE...</button>
            </div>
        </div>
        <div class="footer">
            <div class="top">
                <h3>huMAN Store</h3>
            </div>
            <div class="bottom">
                <p>© 2022 Human Store | All Rights Reserved</p>
                <div class="downloader">
                    <p>App Store</p>
                    <p>Google PlayStore</p>
                </div>
            </div>
        </div>
    </div>
    <div id="suitwithpants-section" class="suitwithpants-section">
        <div class="bottom-nav">
            <p onclick="mens_section()"><b>Mens</b></p>
            <p onclick="longsleeves_section()"><b>Long Sleeves</b></p>
            <p onclick="suitwithpants_section()"><b><u>Suits w/ Pants</u></b></p>
            <p onclick="shoes_section()"><b>Shoes</b></p>
            <p onclick="watches_section()"><b>Watches</b></p>
            <p onclick="necklaces_section()"><b>Necklaces</b></p>
            <p onclick="bags_section()"><b>Bags</b></p>
        </div>
        <div class="sales-content-layout">
            <div class="list-items">
                <div class="item1">
                    <div class="images">
                        <img src="./images/SuitWithPants/item4.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Toxido Suits</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item2">
                    <div class="images">
                        <img src="./images/SuitWithPants/item5.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Stripes Suits</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item3">
                    <div class="images">
                        <img src="./images/SuitWithPants/item6.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Square Line Suits</p>
                        </div>
                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see-more">
                <button>SEE MORE...</button>
            </div>
        </div>
        <div class="footer">
            <div class="top">
                <h3>huMAN Store</h3>
            </div>
            <div class="bottom">
                <p>© 2022 Human Store | All Rights Reserved</p>
                <div class="downloader">
                    <p>App Store</p>
                    <p>Google PlayStore</p>
                </div>
            </div>
        </div>
    </div>
    <div id="shoes-section" class="shoes-section">
        <div class="bottom-nav">
            <p onclick="mens_section()"><b>Mens</b></p>
            <p onclick="longsleeves_section()"><b>Long Sleeves</b></p>
            <p onclick="suitwithpants_section()"><b>Suits w/ Pants</b></p>
            <p onclick="shoes_section()"><b><u>Shoes</u></b></p>
            <p onclick="watches_section()"><b>Watches</b></p>
            <p onclick="necklaces_section()"><b>Necklaces</b></p>
            <p onclick="bags_section()"><b>Bags</b></p>
        </div>
        <div class="sales-content-layout">
            <div class="list-items">
                <div class="item1">
                    <div class="images">
                        <img src="./images/Shoes/item7.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Black Shoes</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item2">
                    <div class="images">
                        <img src="./images/Shoes/item8.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Boots</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item3">
                    <div class="images">
                        <img src="./images/Shoes/item9.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Rolex</p>
                        </div>
                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see-more">
                <button>SEE MORE...</button>
            </div>
        </div>
        <div class="footer">
            <div class="top">
                <h3>huMAN Store</h3>
            </div>
            <div class="bottom">
                <p>© 2022 Human Store | All Rights Reserved</p>
                <div class="downloader">
                    <p>App Store</p>
                    <p>Google PlayStore</p>
                </div>
            </div>
        </div>
    </div>
    <div id="watches-section" class="watches-section">
        <div class="bottom-nav">
            <p onclick="mens_section()"><b>Mens</b></p>
            <p onclick="longsleeves_section()"><b>Long Sleeves</b></p>
            <p onclick="suitwithpants_section()"><b>Suits w/ Pants</b></p>
            <p onclick="shoes_section()"><b>Shoes</b></p>
            <p onclick="watches_section()"><b><u>Watches</u></b></p>
            <p onclick="necklaces_section()"><b>Necklaces</b></p>
            <p onclick="bags_section()"><b>Bags</b></p>
        </div>
        <div class="sales-content-layout">
            <div class="list-items">
                <div class="item1">
                    <div class="images">
                        <img src="./images/Watches/item10.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Classic Brown Watch</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item2">
                    <div class="images">
                        <img src="./images/Watches/item11.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Classic Mechanical Watch</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item3">
                    <div class="images">
                        <img src="./images/Watches/item12.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Rolex</p>
                        </div>
                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see-more">
                <button>SEE MORE...</button>
            </div>
        </div>
        <div class="footer">
            <div class="top">
                <h3>huMAN Store</h3>
            </div>
            <div class="bottom">
                <p>© 2022 Human Store | All Rights Reserved</p>
                <div class="downloader">
                    <p>App Store</p>
                    <p>Google PlayStore</p>
                </div>
            </div>
        </div>
    </div>
    <div id="necklaces-section" class="necklaces-section">
        <div class="bottom-nav">
            <p onclick="mens_section()"><b>Mens</b></p>
            <p onclick="longsleeves_section()"><b>Long Sleeves</b></p>
            <p onclick="suitwithpants_section()"><b>Suits w/ Pants</b></p>
            <p onclick="shoes_section()"><b>Shoes</b></p>
            <p onclick="watches_section()"><b>Watches</b></p>
            <p onclick="necklaces_section()"><b><u>Necklaces</u></b></p>
            <p onclick="bags_section()"><b>Bags</b></p>
        </div>
        <div class="sales-content-layout">
        <div class="list-items">
                <div class="item1">
                    <div class="images">
                        <img src="./images/Necklace/item13.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Ultra Cursive Silver</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item2">
                    <div class="images">
                        <img src="./images/Necklace/item14.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Silver with Alpha Tag</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item3">
                    <div class="images">
                        <img src="./images/Necklace/item15.jpg" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Golden Alpha Bar</p>
                        </div>
                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see-more">
                <button>SEE MORE...</button>
            </div>
        </div>
        <div class="footer">
            <div class="top">
                <h3>huMAN Store</h3>
            </div>
            <div class="bottom">
                <p>© 2022 Human Store | All Rights Reserved</p>
                <div class="downloader">
                    <p>App Store</p>
                    <p>Google PlayStore</p>
                </div>
            </div>
        </div>
    </div>
    <div id="bags-section" class="bags-section">
        <div class="bottom-nav">
            <p onclick="mens_section()"><b>Mens</b></p>
            <p onclick="longsleeves_section()"><b>Long Sleeves</b></p>
            <p onclick="suitwithpants_section()"><b>Suits w/ Pants</b></p>
            <p onclick="shoes_section()"><b>Shoes</b></p>
            <p onclick="watches_section()"><b>Watches</b></p>
            <p onclick="necklaces_section()"><b><u>Necklaces</u></b></p>
            <p onclick="bags_section()"><b>Bags</b></p>
        </div>
        <div class="sales-content-layout">
        <div class="list-items">
                <div class="item1">
                    <div class="images">
                        <img src="./images/Bags/item16.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Alpha Bag</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item2">
                    <div class="images">
                        <img src="./images/Bags/item17.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Professional Bag</p>
                        </div>

                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>

                <div class="item3">
                    <div class="images">
                        <img src="./images/Bags/item18.png" alt="">
                    </div>
                    <div class="info-buynow">
                        <div class="items-info">
                            <p>huMAN Athletic Bag</p>
                        </div>
                        <div class="buynow-addtocart">
                            <button>Buy Now</button>
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see-more">
                <button>SEE MORE...</button>
            </div>
        </div>
        <div class="footer">
            <div class="top">
                <h3>huMAN Store</h3>
            </div>
            <div class="bottom">
                <p>© 2022 Human Store | All Rights Reserved</p>
                <div class="downloader">
                    <p>App Store</p>
                    <p>Google PlayStore</p>
                </div>
            </div>
        </div>
    </div>

    <script src="guestscript.js"></script>

</body>

</html>