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
    <title>Single Product Template</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
    <script src="https://kit.fontawesome.com/3f3858291e.js" defer crossorigin="anonymous"></script>

</head>
<body>


        <!--start Main section -->

        <section class="info" style="margin-top: 7%;">
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

        <section class="newsletter">
            <div class="newsletter-container">
                <div class="newsletter-form">
                    <h3>Na kontaktoni permes email</h3>
                    <form action="/" method="GET" class="form" id="newsletterForm">
                        <div id="error"></div>
                        <input type="text" id="newsletterName" placeholder="Mesazhi" required>
                        <input type="email" id="newsletterEmail" placeholder="Email Adresa">
                        <button id="submit" type="newsletterSubmit">Dergo</button>
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