
<?php
// here starts the header
include "includes/header.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekti i pare - Inxhinieri e UEB-it</title>
    <link rel="stylesheet" href="../styles/style.css">

    <!-- Scripts -->
    <script src="index.js" defer></script>
    <script src="https://kit.fontawesome.com/3f3858291e.js" defer crossorigin="anonymous"></script>
    <!-- Scripts -->
</head>
<body>
    <!--Here starts hero section-->
    <section class="hero" id="hero">
        <div class="hero-container" id="hero-container">
            <h2>Random Store Slogan</h2>
            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, magnam? Praesentium iure consequatur iusto atque eligendi illum at odio mollitia!</h6>
            <a href="shop.php"><button>Our Products</button></a>
        </div>
    </section>
    <!--Here ends hero section-->

    <section class="products-section">
    <div class="products-section-title">
            <h2>Featured Products</h2>
        </div>
        <?php
            $showProducts = $conn->showFeaturedProducts();
        ?>
    <div class="featured-products-button">
        <a href="shop.php"><button>All Products</button></a>
    </div>
        

    </section>
    <!--Here starts third section-->

    <!--Here starts third section-->
    <section class="about">
        <div class="title">
            <h2>Rreth Nesh</h2>
        </div>
        <div class="about-container">
            <div class="about-image">
                <img src="images/about.webp" alt="">
            </div>
            <div class="about-content">
                <h4>Nentitulli per rreth nesh</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nulla alias quis voluptate sapiente sed debitis culpa maiores accusamus aliquam? Mollitia quasi praesentium nulla quam iure quaerat esse reiciendis saepe.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nulla alias quis voluptate sapiente sed debitis culpa maiores accusamus aliquam? Mollitia quasi praesentium nulla quam iure quaerat esse reiciendis saepe.</p>
                <button>Lexo me shume</button>
            </div>
        </div>
    </section>

    <!-- Here starts fourth -->

    <section class="info">
        <div class="info-container">
            <div class="map">
                <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=Rruga%20B,%20Prishtine+(Rruga%20B,%20Prishtina)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">swimming watch</a></iframe></div>
            </div>
            <div class="info">
                <h3>Contact Informations</h3>
                <div class="list">
                    <h5><i class="fa-solid fa-map-pin""></i> Rruga B, Prishtine</h5>
                    <h5><i class="fa-solid fa-phone"></i>+383 44 567 890</h5>
                    <h5><i class="fa-solid fa-clock"></i>Monday - Sunday 08:00 - 20:00</h5>
                    <h5><i class="fa-solid fa-envelope"></i>info@ourname.com</h5>    
                </div>
           </div>
        </div>
    </section>

    <!-- Here starts newsletter section -->

    <section class="newsletter">
        <div class="newsletter-container">
            <div class="newsletter-form">
                <h3>Abonohuni per tu informuar per ofertat me te reja</h3>
                <form action="/" method="GET" class="form" id="newsletterForm">
                    <div id="error"></div>
                    <input type="text" id="newsletterName" placeholder="Emri dhe Mbiemri" required>
                    <input type="email" id="newsletterEmail" placeholder="Email Adresa">
                    <button id="submit" type="newsletterSubmit">Abonohu</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Here starts footer section -->

  
         <?php include "includes/footer.php"?>

</body>
</html>