<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product Template</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
    <script src="https://kit.fontawesome.com/3f3858291e.js" defer crossorigin="anonymous"></script>

</head>
<body>
        <!--Here starts the header-->
        <header>
            <div class="navbar">
                <div class="nav-logo">
                    <h2>Logo</h2>
                </div>
                <div class="nav-list">
                    <a href="index.html">Home</a>
                    <a href="single-product.html">Product</a>
                    <a href="">About</a>
                    <a href="">Contact</a>
                </div>
                <div class="nav-info">
                    <h4><i class="fa-solid fa-user"></i></i></h4>
                    <h4><i class="fa-solid fa-cart-shopping" id="cart"></i></h4>
                </div>
            </div>
        </header>
        <!--Here ends the header-->

        <!--start Main section -->
        <section class="single-container">
            <div class="single-image" id="product-image">
                <!-- <img src="images/produkt1.jpg" alt=""> -->
            </div>
            <div class="single-content">
                <h3 class="single-title">Xhup Me Mbushje</h3>
                <p class="single-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, repellat amet maiores non saepe sint provident aut earum odit temporibus maxime suscipit consequatur nobis facilis, exercitationem autem molestiae architecto. Iusto.</p>
                <h4 class="single-price">$79.99</h4>
                <div class="single-colors colors">
                    <button id="firstColor" style="background-color: black;"></button>
                    <button id="secondColor" style="background-color: rgb(16, 170, 116);"></button>
                    <button id="thirdColor" style="background-color: rgb(90, 90, 90);"></button>
                </div>
                <div class="single-size">
                    <button id="size-s">S</button>
                    <button id="size-m">M</button>
                    <button id="size-l">L</button>
                    <button id="size-xl">XL</button>
                </div>
                <div class="single-cta">
                    <form action="/" method="GET" id="single-form">
                        <input type="number" value="1" id="single-quantity">
                        <button type="submit" id="single-submit">Add To Cart</button>
                    </form>
                </div>
            </div>
        </section>
        <!--end Main section -->

        <!-- Here starts footer section -->

        <footer class="footer">
        <div class="footer-content">
            <div class="logo">
                <h2>Logo</h2>
                <h4>Our Slogan</h4>
            </div>
            <div class="nav-menu">
                <a href="">Product</a>
                <a href="">About</a>
                <a href="">Contact</a>
                <a href="">Privacy & Policy</a>
            </div>
            <div class="social-icons">
                <h3><i class="fa-brands fa-facebook"></i> @ourfacebook</h3>
                <h3><i class="fa-brands fa-instagram"></i></i> @ourinstagram</h3>
                <h3><i class="fa-brands fa-linkedin"></i> @ourlinkedin</h3>
            </div>
        </div>
        <div class="footer-end">
            <h4>All Rights Reserved &copy; Erind Blinishti & Doart Selmani</h4>
        </div>
        </footer>
        <!--Here ends the footer-->
</body>
</html>